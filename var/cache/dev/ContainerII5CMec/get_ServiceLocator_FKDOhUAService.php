<?php

namespace ContainerII5CMec;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FKDOhUAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fKDOhUA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fKDOhUA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'policy1' => ['privates', '.errored..service_locator.fKDOhUA.App\\Entity\\Policy1', NULL, 'Cannot autowire service ".service_locator.fKDOhUA": it needs an instance of "App\\Entity\\Policy1" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'policy1' => 'App\\Entity\\Policy1',
        ]);
    }
}