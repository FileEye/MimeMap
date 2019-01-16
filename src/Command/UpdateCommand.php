<?php

namespace FileEye\MimeMap\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
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
                MapUpdater::DEFAULT_URL
            )
            ->addArgument(
                'output-file',
                InputArgument::OPTIONAL,
                'Path to the directory of the mapper class PHP file',
                MapUpdater::getDefaultCodeFilePath()
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $updater = new MapUpdater();
        try {
            $new_map_array = $updater->loadMapFromUrl($input->getArgument('source-url'));
            $new_map = new MapHandler($new_map_array);
        } catch (\RuntimeException $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            exit(2);
        }

        // xx
        $new_map->setExtensionDefaultType('sub', 'text/vnd.dvb.subtitle');
        $new_map->setExtensionDefaultType('wmz', 'application/x-msmetafile');

        $current_map = new MapHandler();
        try {
            $updater->compareMaps($current_map->get(), $new_map->get());
            $output->writeln('<info>No changes to mapping.</info>');
            exit(0);
        } catch (\RuntimeException $e) {
            $output->writeln('Changes to MIME types mapping:');
            $output->writeln($e->getMessage());
        }
        $updater->writeMapToCodeFile($new_map, $input->getArgument('output-file'));
        $output->writeln('<comment>Code updated.</comment>');
    }
}
