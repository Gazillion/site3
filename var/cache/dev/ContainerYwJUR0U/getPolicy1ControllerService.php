<?php

namespace ContainerYwJUR0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPolicy1ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Policy1Controller' shared autowired service.
     *
     * @return \App\Controller\Policy1Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Policy1Controller.php';

        $container->services['App\\Controller\\Policy1Controller'] = $instance = new \App\Controller\Policy1Controller();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Policy1Controller', $container));

        return $instance;
    }
}
