<?php

namespace FileEye\MimeMap\Command;

use SebastianBergmann\Comparator\ComparisonFailure;
use SebastianBergmann\Comparator\Factory;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;
use FileEye\MimeMap\Map\AbstractMap;
use FileEye\MimeMap\MapHandler;
use FileEye\MimeMap\MapUpdater;

/**
 * A Symfony application command to update the MIME type to extension map.
 */
class UpdateCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('update')
            ->setDescription('Updates the MIME-type-to-extension map. Executes the commands in the script file specified by --script, then writes the map to the PHP file where the PHP --class is defined.')
            ->addOption(
                'script',
                null,
                InputOption::VALUE_REQUIRED,
                'File name of the script containing the sequence of commands to execute to build the default map.',
                MapUpdater::getDefaultMapBuildFile()
            )
            ->addOption(
                'class',
                null,
                InputOption::VALUE_REQUIRED,
                'The fully qualified class name of the PHP class storing the map.',
                MapHandler::DEFAULT_MAP_CLASS
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $new_map = MapHandler::map('\FileEye\MimeMap\Map\EmptyMap');
        $updater = new MapUpdater($new_map);

        // Executes on an emtpy map the script commands.
        $commands = Yaml::parse(file_get_contents($input->getOption('script')));
        foreach ($commands as $command) {
            $command[1][] = $output;
            try {
                call_user_func_array([$updater, $command[0]], $command[1]);
            } catch (\Exception $e) {
                $output->writeln('<error>' . $e->getMessage() . '</error>');
                exit(2);
            }
        }

        MapHandler::setDefaultMapClass($input->getOption('class'));
        $current_map = MapHandler::map();

        // Check if anything got changed.
        $write = false;
        try {
            $this->compareMaps($current_map, $new_map, 't');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to MIME types mapping</comment>');
            $output->writeln($e->getMessage());
            $write = true;
        }
        try {
            $this->compareMaps($current_map, $new_map, 'e');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to extensions mapping</comment>');
            $output->writeln($e->getMessage());
            $write = true;
        }

        // If changed, save the new map to the PHP file.
        if ($write) {
            $updater->writeMapToPhpClassFile($current_map->getFileName());
            $output->writeln('<comment>Code updated.</comment>');
        } else {
            $output->writeln('<info>No changes to mapping.</info>');
        }

        // Reset the new map's map array.
        $new_map->reset();
    }

    /**
     * Compares two type-to-extension maps by section.
     *
     * @param AbstractMap $old_map
     *   The first map to compare.
     * @param AbstractMap $new_map
     *   The second map to compare.
     * @param string $section
     *   The first-level array key to compare: 'types' or 'extensions'.
     *
     * @throws \RuntimeException with diff details if the maps differ.
     *
     * @return bool
     *   True if the maps are equal.
     */
    protected function compareMaps(AbstractMap $old_map, AbstractMap $new_map, $section)
    {
        $old_map->sort();
        $new_map->sort();
        $old = $old_map->getMapArray();
        $new = $new_map->getMapArray();

        $factory = new Factory;
        $comparator = $factory->getComparatorFor($old[$section], $new[$section]);
        try {
            $comparator->assertEquals($old[$section], $new[$section]);
            return true;
        } catch (ComparisonFailure $failure) {
            $old_string = var_export($old[$section], true);
            $new_string = var_export($new[$section], true);
            if (class_exists('\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder')) {
                $differ = new Differ(new UnifiedDiffOutputBuilder("--- Removed\n+++ Added\n"));
                throw new \RuntimeException($differ->diff($old_string, $new_string));
            } else {
                throw new \RuntimeException(' ');
            }
        }
    }
}
