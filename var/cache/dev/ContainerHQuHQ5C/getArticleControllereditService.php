<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AazXZCq.App\Controller\ArticleController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.AazXZCq'] ?? $container->load('get_ServiceLocator_AazXZCqService'));

        if (isset($container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::edit()'])) {
            return $container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::edit()'];
        }

        return $container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::edit()'] = $a->withContext('App\\Controller\\ArticleController::edit()', $container);
    }
}
