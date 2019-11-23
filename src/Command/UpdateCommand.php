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
            ->addOption(
                'diff',
                null,
                InputOption::VALUE_NONE,
                'Report updates.'
            )
            ->addOption(
                'fail-on-diff',
                null,
                InputOption::VALUE_NONE,
                'Exit with an error when a difference is found. Map will not be updated.'
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $updater = new MapUpdater();
        $updater->selectBaseMap(MapUpdater::DEFAULT_BASE_MAP_CLASS);

        // Executes on the base map the script commands.
        $commands = Yaml::parse(file_get_contents($input->getOption('script')));
        foreach ($commands as $command) {
            $output->writeln("<info>{$command[0]} ...</info>");
            try {
                $errors = call_user_func_array([$updater, $command[1]], $command[2]);
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        $output->writeln("<comment>$error.</comment>");
                    }
                }
            } catch (\Exception $e) {
                $output->writeln('<error>' . $e->getMessage() . '</error>');
                return(1);
            }
        }

        // Load the map to be changed.
        MapHandler::setDefaultMapClass($input->getOption('class'));
        $current_map = MapHandler::map();

        // Check if anything got changed.
        $write = true;
        if ($input->getOption('diff')) {
            $write = false;
            foreach ([
                't' => 'MIME types',
                'a' => 'MIME type aliases',
                'e' => 'extensions',
            ] as $key => $desc) {
                try {
                    $output->writeln("<info>Checking changes to {$desc} ...</info>");
                    $this->compareMaps($current_map, $updater->getMap(), $key);
                } catch (\RuntimeException $e) {
                    $output->writeln("<comment>Changes to {$desc} mapping:</comment>");
                    $output->writeln($e->getMessage());
                    $write = true;
                }
            }
        }

        // Fail on diff if required.
        if ($write && $input->getOption('diff') && $input->getOption('fail-on-diff')) {
            throw new \RuntimeException('Changes to mapping detected, aborting.');
        }

        // If changed, save the new map to the PHP file.
        if ($write) {
            $updater->writeMapToPhpClassFile($current_map->getFileName());
            $output->writeln('<comment>Code updated.</comment>');
        } else {
            $output->writeln('<info>No changes to mapping.</info>');
        }

        // Reset the new map's map array.
        $updater->getMap()->reset();

        return(0);
    }

    /**
     * Compares two type-to-extension maps by section.
     *
     * @param AbstractMap $old_map
     *   The first map to compare.
     * @param AbstractMap $new_map
     *   The second map to compare.
     * @param string $section
     *   The first-level array key to compare: 't' or 'e' or 'a'.
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
