<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
        '/admin/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register-as-partner' => [[['_route' => 'app_register_as_partner', '_controller' => 'App\\Controller\\SecurityController::registerAsPartner'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_web', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
        '/incidents' => [[['_route' => 'app_incidents', '_controller' => 'App\\Controller\\WebController::incidents'], null, null, null, false, false, null]],
        '/condamnations' => [[['_route' => 'app_condamnations', '_controller' => 'App\\Controller\\WebController::condamnations'], null, null, null, false, false, null]],
        '/sujets' => [[['_route' => 'app_sujets', '_controller' => 'App\\Controller\\WebController::sujets'], null, null, null, false, false, null]],
        '/organisations' => [[['_route' => 'app_organisations', '_controller' => 'App\\Controller\\WebController::organisations'], null, null, null, false, false, null]],
        '/identites' => [[['_route' => 'app_identites', '_controller' => 'App\\Controller\\WebController::identites'], null, null, null, false, false, null]],
        '/contenus' => [[['_route' => 'app_contenus', '_controller' => 'App\\Controller\\WebController::contenus'], null, null, null, false, false, null]],
        '/signalements' => [[['_route' => 'app_signalements', '_controller' => 'App\\Controller\\WebController::signalements'], null, null, null, false, false, null]],
        '/enquetes' => [[['_route' => 'app_enquetes', '_controller' => 'App\\Controller\\WebController::enquetes'], null, null, null, false, false, null]],
        '/etablissements' => [[['_route' => 'app_etablissements', '_controller' => 'App\\Controller\\WebController::etablissements'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                .')'
                .'|/admin/(?'
                    .'|role/([^/]++)(?'
                        .'|(*:112)'
                        .'|/edit(*:125)'
                        .'|(*:133)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:158)'
                        .'|/(?'
                            .'|edit(*:174)'
                            .'|toggle\\-status(*:196)'
                        .')'
                        .'|(*:205)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        112 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        158 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        174 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        205 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
