<?php

namespace ContainerCRtvsOa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetteSearchFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DetteSearchFormType' shared autowired service.
     *
     * @return \App\Form\DetteSearchFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DetteSearchFormType.php';

        return $container->privates['App\\Form\\DetteSearchFormType'] = new \App\Form\DetteSearchFormType();
    }
}
