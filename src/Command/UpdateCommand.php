<?php

namespace FileEye\MimeMap\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
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
            ->setDescription('Updates the MIME-type-to-extension map.')
            ->addArgument(
                'source-url',
                InputArgument::OPTIONAL,
                'URL of the source map',
                MapUpdater::DEFAULT_SOURCE_FILE
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
            $new_map = $updater->createMapFromSourceFile($input->getArgument('source-url'));
        } catch (\RuntimeException $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            exit(2);
        }

        // xx
        $commands = Yaml::parseFile(__DIR__ . '/../../resources/overrides.yml');
        foreach ($commands as $command) {
            call_user_func_array([$new_map, $command[0]], $command[1]);
        }

        //$new_map->setExtensionDefaultType('sub', 'text/vnd.dvb.subtitle');
        //$new_map->setExtensionDefaultType('', '');
        //$new_map->sort();

        // Check if anything got changed.
        $write = false;
        try {
            $updater->compareMaps($current_map, $new_map, 'types');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to MIME types mapping:</comment>');
            $output->writeln($e->getMessage());
            $write = true;
        }
        try {
            $updater->compareMaps($current_map, $new_map, 'extensions');
        } catch (\RuntimeException $e) {
            $output->writeln('<comment>Changes to extensions mapping:</comment>');
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
