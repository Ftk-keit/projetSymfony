<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hKA2je_.App\Controller\UserController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hKA2je_.App\\Controller\\UserController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.hKA2je_.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.hKA2je_": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'user' => 'App\\Entity\\User',
        ]))->withContext('App\\Controller\\UserController::show()', $container);
    }
}
