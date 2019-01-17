<?php

namespace FileEye\MimeMap\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;
use FileEye\MimeMap\MapUpdater;
use FileEye\MimeMap\MapHandler;

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
            ->setDescription('Updates the MIME-type-to-extension map. Reads the source file specified by --source, applies any overrides specified in the file at --override, then writes the map to the PHP file where the PHP --class is defined.')
            ->addOption(
                'source',
                null,
                InputOption::VALUE_REQUIRED,
                'URL or filename of the source map',
                MapUpdater::DEFAULT_SOURCE_FILE
            )
            ->addOption(
                'override',
                null,
                InputOption::VALUE_REQUIRED,
                'URL or filename of the override commands to execute',
                MapUpdater::DEFAULT_OVERRIDE_FILE
            )
            ->addOption(
                'class',
                null,
                InputOption::VALUE_REQUIRED,
                'The Fully Qualified Class Name of the PHP class storing the map',
                MapHandler::DEFAULT_MAP_CLASS
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $current_map = new MapHandler();
        $updater = new MapUpdater();

        // Loads the map from the source file.
        try {
            $new_map = $updater->createMapFromSourceFile($input->getOption('source'));
        } catch (\RuntimeException $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            exit(2);
        }

        // Applies the overrides.
        try {
            $content = file_get_contents($input->getOption('override'));
            $updater->applyOverrides($new_map, Yaml::parse($content));
        } catch (\Exception $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            exit(2);
        }

        // Check if anything got changed.
        $write = false;
        try {
            $updater->compareMaps($current_map, $new_map, 'types');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to MIME types mapping</comment>');
            $output->writeln($e->getMessage());
            $write = true;
        }
        try {
            $updater->compareMaps($current_map, $new_map, 'extensions');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to extensions mapping</comment>');
            $output->writeln($e->getMessage());
            $write = true;
        }

        // If changed, save the new map to the PHP file.
        if ($write) {
            $updater->writeMapToCodeFile($new_map, $current_map->getMapFileName());
            $output->writeln('<comment>Code updated.</comment>');
        } else {
            $output->writeln('<info>No changes to mapping.</info>');
        }
    }
}
