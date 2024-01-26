<?php

namespace ContainerYwJUR0U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAjaxServiceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AjaxServiceController' shared autowired service.
     *
     * @return \App\Controller\AjaxServiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AjaxServiceController.php';

        $container->services['App\\Controller\\AjaxServiceController'] = $instance = new \App\Controller\AjaxServiceController(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\AjaxServiceController', $container));

        return $instance;
    }
}