<?php

namespace Hautelook\ApiBundle\Command;

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
            $output->write(sprintf('<info>%s</info> => ', $name));
            $output->write($this->formatParameter($param));
            $output->writeln('');
        }
    }

    private function formatParameter($param)
    {
        if (is_string($param)) {
            return $param;
        } elseif (is_array($param) && empty($param)) {
            return '[]';
        }

        return print_r($param, true);
    }
}
