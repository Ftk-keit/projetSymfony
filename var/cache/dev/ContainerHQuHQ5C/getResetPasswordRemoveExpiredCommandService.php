<?php

namespace ContainerHQuHQ5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordRemoveExpiredCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Command/ResetPasswordRemoveExpiredCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Util/ResetPasswordCleaner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/ResetPasswordRequestRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/Fake/FakeResetPasswordInternalRepository.php';

        $container->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(new \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner(new \SymfonyCasts\Bundle\ResetPassword\Persistence\Fake\FakeResetPasswordInternalRepository(), true));

        $instance->setName('reset-password:remove-expired');

        return $instance;
    }
}
