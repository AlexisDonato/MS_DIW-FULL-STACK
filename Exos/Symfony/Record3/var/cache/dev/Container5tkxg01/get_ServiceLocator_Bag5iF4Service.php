<?php

namespace Container5tkxg01;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bag5iF4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bag5iF4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bag5iF4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'disc' => ['privates', '.errored..service_locator.bag5iF4.App\\Entity\\Disc', NULL, 'Cannot autowire service ".service_locator.bag5iF4": it references class "App\\Entity\\Disc" but no such service exists.'],
        ], [
            'disc' => 'App\\Entity\\Disc',
        ]);
    }
}
