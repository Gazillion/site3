<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/service/policy/create' => [[['_route' => 'service_policy_create', '_controller' => 'App\\Controller\\AjaxServiceController::saveData'], null, ['POST' => 0], null, false, false, null]],
        '/policies' => [[['_route' => 'app_list', '_controller' => 'App\\Controller\\ListController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/api/policy-v1' => [[['_route' => 'app_policy1', '_controller' => 'App\\Controller\\Policy1Controller::List'], null, null, null, false, false, null]],
        '/api/policy-v1/create' => [[['_route' => 'policy1_create', '_controller' => 'App\\Controller\\Policy1Controller::create'], null, ['POST' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/login2' => [[['_route' => 'app_login2', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout2' => [[['_route' => 'app_logout2', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/policy1/(?'
                    .'|([^/]++)(*:62)'
                    .'|update/([^/]++)(*:84)'
                    .'|([^/]++)(*:99)'
                .')'
                .'|/api/policy\\-v1/user/([^/]++)(*:136)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'policy1_show', '_controller' => 'App\\Controller\\Policy1Controller::show'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'policy1_update', '_controller' => 'App\\Controller\\Policy1Controller::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        99 => [[['_route' => 'policy1_delete', '_controller' => 'App\\Controller\\Policy1Controller::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        136 => [
            [['_route' => 'policy1_user_details', '_controller' => 'App\\Controller\\Policy1Controller::showUserPolicy'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
