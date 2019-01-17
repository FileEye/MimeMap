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
                MapUpdater::DEFAULT_SOURCE_FILE
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
            $new_map = $updater->createMapFromSourceFile($input->getArgument('source-url'))
        } catch (\RuntimeException $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');
            exit(2);
        }

        // xx
        //$new_map->setExtensionDefaultType('sub', 'text/vnd.dvb.subtitle');
        //$new_map->setExtensionDefaultType('wmz', 'application/x-msmetafile');
        $new_map->sort();

        $current_map = new MapHandler();
        $write = false;
        try {
            $updater->compareMaps($current_map->get(), $new_map->get(), 'types');
        } catch (\RuntimeException $e) {
            $output->writeln('Changes to MIME types mapping:');
            $output->writeln($e->getMessage());
            $write = true;
        }
        try {
            $updater->compareMaps($current_map->get(), $new_map->get(), 'extensions');
        } catch (\RuntimeException $e) {
            $output->writeln('Changes to extensions mapping:');
            $output->writeln($e->getMessage());
            $write = true;
        }
        if ($write) {
            $updater->writeMapToCodeFile($new_map->get(), $input->getArgument('output-file'));
            $output->writeln('<comment>Code updated.</comment>');
        } else {
            $output->writeln('<info>No changes to mapping.</info>');
        }
    }
}
