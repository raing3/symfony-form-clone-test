<?php

namespace SymfonyFormCloneTest;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel as SymfonyKernel;

class Kernel extends SymfonyKernel
{
    public function registerBundles()
    {
        return [
            new FrameworkBundle()
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}
