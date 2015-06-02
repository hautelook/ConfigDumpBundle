<?php

namespace Hautelook\ConfigDumpBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigurationDumpCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $description =
            'Dump config';
        $this
            ->setName('hautelook:dump:config')
            ->setDescription($description)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var $container \Symfony\Component\DependencyInjection\Container */
        $container = $this->getContainer();
        $parameters = $container->getParameterBag();

        foreach ($parameters->all() as $name => $param) {
            $this->outputParameter($output, $name, $param);
        }
    }

    private function formatParameter($param)
    {
        if (is_array($param) && empty($param)) {
            return '[]';
        } elseif (empty($param)) {
            return '""';
        } elseif (is_string($param)) {
            return $param;
        }

        return print_r($param, true);
    }

    /**
     * @param OutputInterface $output
     * @param string          $name
     * @param string          $param
     */
    private function outputParameter(OutputInterface $output, $name, $param)
    {
        $output->write(sprintf('<info>%s</info> => ', $name));
        $output->write($this->formatParameter($param));
        $output->writeln('');
    }
}
