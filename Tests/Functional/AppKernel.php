<?php

namespace Hautelook\ConfigDumpBundle\Tests\Functional;

use Hautelook\ConfigDumpBundle\HautelookConfigDumpBundle;
use Hautelook\ConfigDumpBundle\Tests\Functional\TestBundle\TestBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new FrameworkBundle(),
            new HautelookConfigDumpBundle(),

            new TestBundle(),
        );
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/ConfigDumpBundle/';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
