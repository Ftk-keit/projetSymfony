<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_AddAttributesSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.add_attributes_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\AddLiveAttributesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/EventListener/AddLiveAttributesSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentStack.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Twig/TemplateMap.php';

        return $container->privates['ux.live_component.add_attributes_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\AddLiveAttributesSubscriber(($container->privates['ux.twig_component.component_stack'] ??= new \Symfony\UX\TwigComponent\ComponentStack()), ($container->privates['ux.live_component.twig.template_mapper'] ??= new \Symfony\UX\LiveComponent\Twig\TemplateMap(($container->targetDir.''.'/live_components_twig_templates.map'))), (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator' => ['privates', 'ux.live_component.live_controller_attributes_creator', 'getUx_LiveComponent_LiveControllerAttributesCreatorService', true],
        ], [
            'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator' => 'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator',
        ]))->withContext('ux.live_component.add_attributes_subscriber', $container));
    }
}
