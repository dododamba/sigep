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
        '/audits' => [[['_route' => 'app_audit_index', '_controller' => 'App\\Controller\\AuditController::index'], null, ['GET' => 0], null, true, false, null]],
        '/audits/nouveau' => [[['_route' => 'app_audit_new', '_controller' => 'App\\Controller\\AuditController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conventions' => [[['_route' => 'app_convention_index', '_controller' => 'App\\Controller\\ConventionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/conventions/nouveau' => [[['_route' => 'app_convention_new', '_controller' => 'App\\Controller\\ConventionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conventions/api/list' => [[['_route' => 'app_convention_api_list', '_controller' => 'App\\Controller\\ConventionController::apiList'], null, ['GET' => 0], null, false, false, null]],
        '/conventions/api/statistiques' => [[['_route' => 'app_convention_api_stats', '_controller' => 'App\\Controller\\ConventionController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboard/api/stats' => [[['_route' => 'app_dashboard_api_stats', '_controller' => 'App\\Controller\\DashboardController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/api/chart/sectors' => [[['_route' => 'app_dashboard_api_chart_sectors', '_controller' => 'App\\Controller\\DashboardController::apiChartSectors'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/api/chart/evolution' => [[['_route' => 'app_dashboard_api_chart_evolution', '_controller' => 'App\\Controller\\DashboardController::apiChartEvolution'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/api/chart/status' => [[['_route' => 'app_dashboard_api_chart_status', '_controller' => 'App\\Controller\\DashboardController::apiChartStatus'], null, ['GET' => 0], null, false, false, null]],
        '/decaissements' => [[['_route' => 'app_decaissement_index', '_controller' => 'App\\Controller\\DecaissementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/decaissements/nouveau' => [[['_route' => 'app_decaissement_new', '_controller' => 'App\\Controller\\DecaissementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/decaissements/api/list' => [[['_route' => 'app_decaissement_api_list', '_controller' => 'App\\Controller\\DecaissementController::apiList'], null, ['GET' => 0], null, false, false, null]],
        '/decaissements/api/statistiques' => [[['_route' => 'app_decaissement_api_stats', '_controller' => 'App\\Controller\\DecaissementController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/financements' => [[['_route' => 'app_financements', '_controller' => 'App\\Controller\\FinancementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/financements/new' => [[['_route' => 'app_financements_new', '_controller' => 'App\\Controller\\FinancementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/institutions' => [[['_route' => 'app_institutions', '_controller' => 'App\\Controller\\InstitutionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/institutions/new' => [[['_route' => 'app_institutions_new', '_controller' => 'App\\Controller\\InstitutionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partners' => [[['_route' => 'app_partners', '_controller' => 'App\\Controller\\PartnerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/partners/new' => [[['_route' => 'app_partners_new', '_controller' => 'App\\Controller\\PartnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partners/api/search' => [[['_route' => 'app_partners_api_search', '_controller' => 'App\\Controller\\PartnerController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/partners/api/stats' => [[['_route' => 'app_partners_api_stats', '_controller' => 'App\\Controller\\PartnerController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/profile/update' => [[['_route' => 'app_profile_update', '_controller' => 'App\\Controller\\ProfileController::profileUpdate'], null, ['POST' => 0], null, false, false, null]],
        '/profile/avatar/delete' => [[['_route' => 'app_profile_avatar_delete', '_controller' => 'App\\Controller\\ProfileController::deleteAvatar'], null, ['POST' => 0], null, false, false, null]],
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
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/api/list' => [[['_route' => 'app_user_api_list', '_controller' => 'App\\Controller\\UserController::apiList'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_web', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
        '/roles' => [[['_route' => 'app_roles', '_controller' => 'App\\Controller\\WebController::roles'], null, null, null, false, false, null]],
        '/login-history' => [[['_route' => 'app_login_history', '_controller' => 'App\\Controller\\WebController::loginHistory'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                .')'
                .'|/a(?'
                    .'|udits/([^/]++)(?'
                        .'|(*:108)'
                        .'|/(?'
                            .'|modifier(*:128)'
                            .'|supprimer(*:145)'
                        .')'
                    .')'
                    .'|dmin/role/([^/]++)(?'
                        .'|(*:176)'
                        .'|/edit(*:189)'
                        .'|(*:197)'
                    .')'
                .')'
                .'|/conventions/(?'
                    .'|([^/]++)(?'
                        .'|(*:234)'
                        .'|/(?'
                            .'|modifier(*:254)'
                            .'|su(?'
                                .'|pprimer(*:274)'
                                .'|spendre(*:289)'
                            .')'
                            .'|cloturer(*:306)'
                            .'|reactiver(*:323)'
                            .'|annuler(*:338)'
                        .')'
                    .')'
                    .'|dashboard(*:357)'
                .')'
                .'|/decaissements/([^/]++)(?'
                    .'|(*:392)'
                    .'|/(?'
                        .'|modifier(*:412)'
                        .'|supprimer(*:429)'
                        .'|valider(*:444)'
                        .'|executer(*:460)'
                        .'|rejeter(*:475)'
                        .'|annuler(*:490)'
                    .')'
                .')'
                .'|/financements/([^/]++)(?'
                    .'|/edit(*:530)'
                    .'|(*:538)'
                    .'|(*:546)'
                .')'
                .'|/institutions/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:588)'
                        .'|toggle\\-status(*:610)'
                    .')'
                    .'|(*:619)'
                    .'|(*:627)'
                .')'
                .'|/p(?'
                    .'|artners/([^/]++)(?'
                        .'|(*:660)'
                        .'|/(?'
                            .'|edit(*:676)'
                            .'|toggle\\-status(*:698)'
                        .')'
                        .'|(*:707)'
                    .')'
                    .'|rojects/([^/]++)(?'
                        .'|(*:735)'
                        .'|/(?'
                            .'|edit(*:751)'
                            .'|toggle\\-status(*:773)'
                            .'|update\\-progress(*:797)'
                            .'|duplicate(*:814)'
                        .')'
                        .'|(*:823)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:853)'
                        .'|/(?'
                            .'|edit(*:869)'
                            .'|toggle\\-status(*:891)'
                        .')'
                        .'|(*:900)'
                    .')'
                    .'|api/(?'
                        .'|([^/]++)(*:924)'
                        .'|stats(*:937)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        108 => [[['_route' => 'app_audit_show', '_controller' => 'App\\Controller\\AuditController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        128 => [[['_route' => 'app_audit_edit', '_controller' => 'App\\Controller\\AuditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'app_audit_delete', '_controller' => 'App\\Controller\\AuditController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        176 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        189 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_convention_show', '_controller' => 'App\\Controller\\ConventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_convention_edit', '_controller' => 'App\\Controller\\ConventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'app_convention_delete', '_controller' => 'App\\Controller\\ConventionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        289 => [[['_route' => 'app_convention_suspend', '_controller' => 'App\\Controller\\ConventionController::suspend'], ['id'], ['POST' => 0], null, false, false, null]],
        306 => [[['_route' => 'app_convention_close', '_controller' => 'App\\Controller\\ConventionController::close'], ['id'], ['POST' => 0], null, false, false, null]],
        323 => [[['_route' => 'app_convention_reactivate', '_controller' => 'App\\Controller\\ConventionController::reactivate'], ['id'], ['POST' => 0], null, false, false, null]],
        338 => [[['_route' => 'app_convention_cancel', '_controller' => 'App\\Controller\\ConventionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        357 => [[['_route' => 'app_convention_dashboard', '_controller' => 'App\\Controller\\ConventionController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        392 => [[['_route' => 'app_decaissement_show', '_controller' => 'App\\Controller\\DecaissementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_decaissement_edit', '_controller' => 'App\\Controller\\DecaissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'app_decaissement_delete', '_controller' => 'App\\Controller\\DecaissementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        444 => [[['_route' => 'app_decaissement_validate', '_controller' => 'App\\Controller\\DecaissementController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        460 => [[['_route' => 'app_decaissement_execute', '_controller' => 'App\\Controller\\DecaissementController::execute'], ['id'], ['POST' => 0], null, false, false, null]],
        475 => [[['_route' => 'app_decaissement_reject', '_controller' => 'App\\Controller\\DecaissementController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        490 => [[['_route' => 'app_decaissement_cancel', '_controller' => 'App\\Controller\\DecaissementController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        530 => [[['_route' => 'app_financements_edit', '_controller' => 'App\\Controller\\FinancementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'app_financements_delete', '_controller' => 'App\\Controller\\FinancementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        546 => [[['_route' => 'app_financements_show', '_controller' => 'App\\Controller\\FinancementController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_institutions_edit', '_controller' => 'App\\Controller\\InstitutionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        610 => [[['_route' => 'app_institutions_toggle_status', '_controller' => 'App\\Controller\\InstitutionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        619 => [[['_route' => 'app_institutions_delete', '_controller' => 'App\\Controller\\InstitutionController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        627 => [[['_route' => 'app_institutions_show', '_controller' => 'App\\Controller\\InstitutionController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        660 => [[['_route' => 'app_partners_show', '_controller' => 'App\\Controller\\PartnerController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        676 => [[['_route' => 'app_partners_edit', '_controller' => 'App\\Controller\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'app_partners_toggle_status', '_controller' => 'App\\Controller\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        707 => [[['_route' => 'app_partners_delete', '_controller' => 'App\\Controller\\PartnerController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        735 => [[['_route' => 'app_projects_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        751 => [[['_route' => 'app_projects_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        773 => [[['_route' => 'app_projects_toggle_status', '_controller' => 'App\\Controller\\ProjectController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        797 => [[['_route' => 'app_projects_update_progress', '_controller' => 'App\\Controller\\ProjectController::updateProgress'], ['id'], ['POST' => 0], null, false, false, null]],
        814 => [[['_route' => 'app_projects_duplicate', '_controller' => 'App\\Controller\\ProjectController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        823 => [[['_route' => 'app_projects_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        853 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        869 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        891 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        900 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        924 => [[['_route' => 'app_user_api_show', '_controller' => 'App\\Controller\\UserController::apiShow'], ['id'], ['GET' => 0], null, false, true, null]],
        937 => [
            [['_route' => 'app_user_api_stats', '_controller' => 'App\\Controller\\UserController::apiStats'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
