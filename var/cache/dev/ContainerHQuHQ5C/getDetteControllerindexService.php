<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetteControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AjxBq8..App\Controller\DetteController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AjxBq8..App\\Controller\\DetteController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'detteRepository' => ['privates', 'App\\Repository\\DetteRepository', 'getDetteRepositoryService', true],
        ], [
            'detteRepository' => 'App\\Repository\\DetteRepository',
        ]))->withContext('App\\Controller\\DetteController::index()', $container);
    }
}
