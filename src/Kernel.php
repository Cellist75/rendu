<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $confDir = $this->getProjectDir().'/config';
        $container->import($confDir.'/packages/*.yaml');
        $container->import($confDir.'/packages/'.$this->environment.'/**/*.yaml');
        $container->import($confDir.'/services.yaml');
        $container->import($confDir.'/services_'.$this->environment.'.yaml');
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import($this->getProjectDir().'/config/routes/*.yaml');
        $routes->import($this->getProjectDir().'/config/routes/'.$this->environment.'/**/*.yaml');
        $routes->import($this->getProjectDir().'/config/routes.yaml');
    }
}
