<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Compiler_JavascriptImportPathCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.compiler.javascript_import_path_compiler' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Compiler\JavaScriptImportPathCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Compiler/AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Compiler/JavaScriptImportPathCompiler.php';

        return $container->privates['asset_mapper.compiler.javascript_import_path_compiler'] = new \Symfony\Component\AssetMapper\Compiler\JavaScriptImportPathCompiler(($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), 'warn', ($container->privates['monolog.logger.asset_mapper'] ?? $container->load('getMonolog_Logger_AssetMapperService')));
    }
}
