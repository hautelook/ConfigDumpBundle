<?php

namespace Hautelook\ConfigDumpBundle\Tests\Functional\Command;

use Hautelook\ConfigDumpBundle\Command\ConfigurationDumpCommand;
use Hautelook\ConfigDumpBundle\Tests\Functional\TestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Command\Command;

abstract class AbstractCommandTest extends TestCase
{
    /**
     * @var Application
     */
    protected $application;

    /**
     * @var string
     */
    private $fixtureDisplay;

    protected function setUp()
    {
        parent::setUp();

        $this->application = new Application(TestCase::getKernel());

        $commands = array_merge(
            [
                new ConfigurationDumpCommand(),
            ],
            $this->getCommands()
        );

        $this->application->addCommands($commands);
    }

    /**
     * @return Command[]
     */
    abstract protected function getCommands();

    /**
     * @return string
     */
    protected function getFixtureDisplay()
    {
        return $this->fixtureDisplay;
    }
}
