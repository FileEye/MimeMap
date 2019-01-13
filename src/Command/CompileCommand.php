<?php

namespace ExifEye\core\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use ExifEye\core\Utility\SpecCompiler;

/**
 * A Symfony application command to compile the ExifEye specification YAML files.
 */
class CompileCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('compile')
            ->setDescription('Converts the ExifEye specification YAML files into a spec.php file.')
            ->addArgument(
                'spec-dir',
                InputArgument::OPTIONAL,
                'Path to the directory of the .yaml specification files'
            )
            ->addArgument(
                'resource-dir',
                InputArgument::OPTIONAL,
                'Path to the directory of the mapper class file'
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $compiler = new SpecCompiler();
        $compiler->compile($input->getArgument('spec-dir'), $input->getArgument('resource-dir'));
    }
}
