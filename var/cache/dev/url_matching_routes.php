<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/financements/api/search' => [[['_route' => 'app_financements_api_search', '_controller' => 'App\\Controller\\FinancementController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/financements/api/stats' => [[['_route' => 'app_financements_api_stats', '_controller' => 'App\\Controller\\FinancementController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/financements/api/by-bailleur' => [[['_route' => 'app_financements_api_by_bailleur', '_controller' => 'App\\Controller\\FinancementController::apiByBailleur'], null, ['GET' => 0], null, false, false, null]],
        '/financements/api/generate-numero' => [[['_route' => 'app_financements_api_generate_numero', '_controller' => 'App\\Controller\\FinancementController::apiGenerateNumero'], null, ['GET' => 0], null, false, false, null]],
        '/financements/export/json' => [[['_route' => 'app_financements_export_json', '_controller' => 'App\\Controller\\FinancementController::exportJson'], null, ['GET' => 0], null, false, false, null]],
        '/institutions/api/search' => [[['_route' => 'app_institutions_api_search', '_controller' => 'App\\Controller\\InstitutionController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/institutions/api/stats' => [[['_route' => 'app_institutions_api_stats', '_controller' => 'App\\Controller\\InstitutionController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
        '/financements' => [[['_route' => 'app_financements', '_controller' => 'App\\Controller\\FinancementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/financements/new' => [[['_route' => 'app_financements_new', '_controller' => 'App\\Controller\\FinancementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/institutions' => [[['_route' => 'app_institutions', '_controller' => 'App\\Controller\\InstitutionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/institutions/new' => [[['_route' => 'app_institutions_new', '_controller' => 'App\\Controller\\InstitutionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partners' => [[['_route' => 'app_partners', '_controller' => 'App\\Controller\\PartnerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/partners/new' => [[['_route' => 'app_partners_new', '_controller' => 'App\\Controller\\PartnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partners/api/search' => [[['_route' => 'app_partners_api_search', '_controller' => 'App\\Controller\\PartnerController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/partners/api/stats' => [[['_route' => 'app_partners_api_stats', '_controller' => 'App\\Controller\\PartnerController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/projects' => [[['_route' => 'app_projects', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, false, false, null]],
        '/projects/new' => [[['_route' => 'app_projects_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projects/api/search' => [[['_route' => 'app_projects_api_search', '_controller' => 'App\\Controller\\ProjectController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/projects/api/stats' => [[['_route' => 'app_projects_api_stats', '_controller' => 'App\\Controller\\ProjectController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/projects/api/budget-by-sector' => [[['_route' => 'app_projects_api_budget_sector', '_controller' => 'App\\Controller\\ProjectController::apiBudgetBySector'], null, ['GET' => 0], null, false, false, null]],
        '/projects/export/json' => [[['_route' => 'app_projects_export_json', '_controller' => 'App\\Controller\\ProjectController::exportJson'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register-as-partner' => [[['_route' => 'app_register_as_partner', '_controller' => 'App\\Controller\\SecurityController::registerAsPartner'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_web', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
        '/conventions' => [[['_route' => 'app_conventions', '_controller' => 'App\\Controller\\WebController::conventions'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\WebController::profile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                .')'
                .'|/financements/([^/]++)(?'
                    .'|/edit(*:116)'
                    .'|(*:124)'
                    .'|(*:132)'
                .')'
                .'|/institutions/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:174)'
                        .'|toggle\\-status(*:196)'
                    .')'
                    .'|(*:205)'
                    .'|(*:213)'
                .')'
                .'|/p(?'
                    .'|artners/([^/]++)(?'
                        .'|(*:246)'
                        .'|/(?'
                            .'|edit(*:262)'
                            .'|toggle\\-status(*:284)'
                        .')'
                        .'|(*:293)'
                    .')'
                    .'|rojects/([^/]++)(?'
                        .'|(*:321)'
                        .'|/(?'
                            .'|edit(*:337)'
                            .'|toggle\\-status(*:359)'
                            .'|update\\-progress(*:383)'
                            .'|duplicate(*:400)'
                        .')'
                        .'|(*:409)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|role/([^/]++)(?'
                        .'|(*:445)'
                        .'|/edit(*:458)'
                        .'|(*:466)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:491)'
                        .'|/(?'
                            .'|edit(*:507)'
                            .'|toggle\\-status(*:529)'
                        .')'
                        .'|(*:538)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        116 => [[['_route' => 'app_financements_edit', '_controller' => 'App\\Controller\\FinancementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        124 => [[['_route' => 'app_financements_delete', '_controller' => 'App\\Controller\\FinancementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_financements_show', '_controller' => 'App\\Controller\\FinancementController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        174 => [[['_route' => 'app_institutions_edit', '_controller' => 'App\\Controller\\InstitutionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [[['_route' => 'app_institutions_toggle_status', '_controller' => 'App\\Controller\\InstitutionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        205 => [[['_route' => 'app_institutions_delete', '_controller' => 'App\\Controller\\InstitutionController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        213 => [[['_route' => 'app_institutions_show', '_controller' => 'App\\Controller\\InstitutionController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_partners_show', '_controller' => 'App\\Controller\\PartnerController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'app_partners_edit', '_controller' => 'App\\Controller\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'app_partners_toggle_status', '_controller' => 'App\\Controller\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        293 => [[['_route' => 'app_partners_delete', '_controller' => 'App\\Controller\\PartnerController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        321 => [[['_route' => 'app_projects_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_projects_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_projects_toggle_status', '_controller' => 'App\\Controller\\ProjectController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        383 => [[['_route' => 'app_projects_update_progress', '_controller' => 'App\\Controller\\ProjectController::updateProgress'], ['id'], ['POST' => 0], null, false, false, null]],
        400 => [[['_route' => 'app_projects_duplicate', '_controller' => 'App\\Controller\\ProjectController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        409 => [[['_route' => 'app_projects_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        529 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        538 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
