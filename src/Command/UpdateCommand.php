<?php

namespace FileEye\MimeMap\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
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
            ->setName('compile')
            ->setDescription('Updates the MIME-type-to-extension map.')
            ->addArgument(
                'source-url',
                InputArgument::OPTIONAL,
                'URL of the source map'
            )
            ->addArgument(
                'output-file',
                InputArgument::OPTIONAL,
                'Path to the directory of the mapper class PHP file'
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $updater->update($input->getArgument('source-url'), $input->getArgument('output-file'));
        $updater = new MapUpdater();
        try {
            $new_map = $updater->loadMapFromUrl($url);
        } catch (\RuntimeException $e) {
            logMsg('No changes to mapping.');
            logMsg($e->getMessage());
        }
        $current_map = (new TypeExtensionMap())->get();
        try {
            $updater->compareMaps($current_map, $new_map);
            logMsg('No changes to mapping.');
            exit(0);
        } catch (\RuntimeException $e) {
            logMsg('Changes to MIME types mapping:');
            logMsg($e->getMessage());
        }
        $updater->writeMapToCodeFile($new_map);
        logMsg('Code updated');

    }
}
