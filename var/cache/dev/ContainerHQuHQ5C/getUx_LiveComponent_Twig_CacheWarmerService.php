<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_Twig_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.twig.cache_warmer' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Twig\TemplateCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/Twig/TemplateCacheWarmer.php';

        return $container->privates['ux.live_component.twig.cache_warmer'] = new \Symfony\UX\LiveComponent\Twig\TemplateCacheWarmer(($container->privates['twig.template_iterator'] ?? $container->load('getTwig_TemplateIteratorService')), 'live_components_twig_templates.map', $container->getEnv('APP_SECRET'));
    }
}
