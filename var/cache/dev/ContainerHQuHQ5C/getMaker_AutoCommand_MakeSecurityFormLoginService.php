<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeSecurityFormLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_security_form_login' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/Common/CanGenerateTestsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/Security/MakeFormLogin.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/TemplateLinter.php';

        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));

        $container->privates['maker.auto_command.make_security_form_login'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\Security\MakeFormLogin($a, ($container->privates['maker.security_config_updater'] ??= new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()), ($container->privates['maker.security_controller_builder'] ??= new \Symfony\Bundle\MakerBundle\Security\SecurityControllerBuilder())), $a, ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.template_linter'] ??= new \Symfony\Bundle\MakerBundle\Util\TemplateLinter($container->getEnv('default::string:MAKER_PHP_CS_FIXER_BINARY_PATH'), $container->getEnv('default::string:MAKER_PHP_CS_FIXER_CONFIG_PATH'))));

        $instance->setName('make:security:form-login');
        $instance->setDescription('Generate the code needed for the form_login authenticator');

        return $instance;
    }
}
