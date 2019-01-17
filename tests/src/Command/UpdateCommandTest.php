<?php

namespace FileEye\MimeMap\test\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class UpdateCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);

        $command = $application->find('update');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('No changes', $output);
    }
}
