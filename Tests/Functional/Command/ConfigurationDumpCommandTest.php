<?php

namespace Hautelook\ConfigDumpBundle\Tests\Functional\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;

class ConfigurationDumpCommandTest extends AbstractCommandTest
{
    /**
     * @return Command[]
     */
    protected function getCommands()
    {
        return [];
    }

    public function testConfigurationDump()
    {
        $command = $this->application->find('hautelook:dump:config');

        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $display = explode("\n", $commandTester->getDisplay());

        foreach ($this->getFixtureLines() as $fixtureLine) {
            $this->assertTrue(in_array($fixtureLine, $display));
        }
    }

    /**
     * @return string[]
     */
    private function getFixtureLines()
    {
        return explode("\n", file_get_contents(__DIR__ . '/../Fixtures/dump_output1.txt'));
    }
}
