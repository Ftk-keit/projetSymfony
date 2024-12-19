<?php

namespace ContainerCRtvsOa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_DoctrineEntityHydrationExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.doctrine_entity_hydration_extension' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Hydration\DoctrineEntityHydrationExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Hydration/HydrationExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Hydration/DoctrineEntityHydrationExtension.php';

        return $container->privates['ux.live_component.doctrine_entity_hydration_extension'] = new \Symfony\UX\LiveComponent\Hydration\DoctrineEntityHydrationExtension(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['doctrine'] ?? self::getDoctrineService($container));
        }, 1));
    }
}
