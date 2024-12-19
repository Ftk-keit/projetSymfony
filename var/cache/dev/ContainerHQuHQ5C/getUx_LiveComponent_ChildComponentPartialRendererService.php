<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_ChildComponentPartialRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.child_component_partial_renderer' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\ChildComponentPartialRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Util/ChildComponentPartialRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Util/FingerprintCalculator.php';

        $a = ($container->privates['ux.live_component.attribute_helper_factory'] ?? $container->load('getUx_LiveComponent_AttributeHelperFactoryService'));

        if (isset($container->privates['ux.live_component.child_component_partial_renderer'])) {
            return $container->privates['ux.live_component.child_component_partial_renderer'];
        }

        return $container->privates['ux.live_component.child_component_partial_renderer'] = new \Symfony\UX\LiveComponent\Util\ChildComponentPartialRenderer(($container->privates['ux.live_component.fingerprint_calculator'] ??= new \Symfony\UX\LiveComponent\Util\FingerprintCalculator($container->getEnv('APP_SECRET'))), $a, (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\UX\\TwigComponent\\ComponentFactory' => ['privates', 'ux.twig_component.component_factory', 'getUx_TwigComponent_ComponentFactoryService', true],
            'Symfony\\UX\\LiveComponent\\Metadata\\LiveComponentMetadataFactory' => ['privates', 'ux.live_component.metadata_factory', 'getUx_LiveComponent_MetadataFactoryService', true],
            'Symfony\\UX\\LiveComponent\\LiveComponentHydrator' => ['privates', 'ux.live_component.component_hydrator', 'getUx_LiveComponent_ComponentHydratorService', true],
            'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator' => ['privates', 'ux.live_component.live_controller_attributes_creator', 'getUx_LiveComponent_LiveControllerAttributesCreatorService', true],
        ], [
            'Symfony\\UX\\TwigComponent\\ComponentFactory' => 'Symfony\\UX\\TwigComponent\\ComponentFactory',
            'Symfony\\UX\\LiveComponent\\Metadata\\LiveComponentMetadataFactory' => 'Symfony\\UX\\LiveComponent\\Metadata\\LiveComponentMetadataFactory',
            'Symfony\\UX\\LiveComponent\\LiveComponentHydrator' => 'Symfony\\UX\\LiveComponent\\LiveComponentHydrator',
            'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator' => 'Symfony\\UX\\LiveComponent\\Util\\LiveControllerAttributesCreator',
        ]))->withContext('ux.live_component.child_component_partial_renderer', $container));
    }
}
