<?php

namespace ContainerI9Z8KJD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GwvSVuBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GwvSVuB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GwvSVuB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdresseController::createNew' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\AdresseController::edit' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\AdresseController::index' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdresseController:createNew' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\AdresseController:edit' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\AdresseController:index' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdresseController::createNew' => '?',
            'App\\Controller\\AdresseController::edit' => '?',
            'App\\Controller\\AdresseController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdresseController:createNew' => '?',
            'App\\Controller\\AdresseController:edit' => '?',
            'App\\Controller\\AdresseController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
