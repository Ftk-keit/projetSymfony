<?php

namespace ContainerCRtvsOa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentTemplateFinderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentTemplateFinder.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['ux.twig_component.component_factory'])) {
            return $container->privates['ux.twig_component.component_factory'];
        }

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\UX\TwigComponent\ComponentTemplateFinder(($container->privates['twig.loader.native_filesystem'] ?? self::getTwig_Loader_NativeFilesystemService($container)), 'components/'), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ClientFormComponent' => [false, 'App\\Twig\\Components\\ClientFormComponent', 'getClientFormComponentService', true],
        ], [
            'ClientFormComponent' => '?',
        ]), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), $a, ['ClientFormComponent' => ['expose_public_props' => true, 'attributes_var' => 'attributes', 'live' => true, 'csrf' => true, 'route' => 'ux_live_component', 'method' => 'post', 'url_reference_type' => 1, 'key' => 'ClientFormComponent', 'service_id' => 'App\\Twig\\Components\\ClientFormComponent', 'class' => 'App\\Twig\\Components\\ClientFormComponent', 'template' => 'components/ClientFormComponent.html.twig']], ['App\\Twig\\Components\\ClientFormComponent' => 'ClientFormComponent']);
    }
}
