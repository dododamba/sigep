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
        '/admin/roles/api/search' => [[['_route' => 'app_roles_api_search', '_controller' => 'App\\Controller\\RoleController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
        '/admin/roles/api/stats' => [[['_route' => 'app_roles_api_stats', '_controller' => 'App\\Controller\\RoleController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/roles/api/active' => [[['_route' => 'app_roles_api_active', '_controller' => 'App\\Controller\\RoleController::apiActive'], null, ['GET' => 0], null, false, false, null]],
        '/admin/roles/export/json' => [[['_route' => 'app_roles_export_json', '_controller' => 'App\\Controller\\RoleController::exportJson'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin/roles' => [[['_route' => 'app_roles', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/roles/new' => [[['_route' => 'app_roles_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register-as-partner' => [[['_route' => 'app_register_as_partner', '_controller' => 'App\\Controller\\SecurityController::registerAsPartner'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/top-management' => [[['_route' => 'app_top_management_dashboard', '_controller' => 'App\\Controller\\TopManagementController::dashboard'], null, ['GET' => 0], null, true, false, null]],
        '/top-management/api/kpis' => [[['_route' => 'app_top_management_api_kpis', '_controller' => 'App\\Controller\\TopManagementController::apiKpis'], null, ['GET' => 0], null, false, false, null]],
        '/top-management/api/charts' => [[['_route' => 'app_top_management_api_charts', '_controller' => 'App\\Controller\\TopManagementController::apiCharts'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/api/list' => [[['_route' => 'app_user_api_list', '_controller' => 'App\\Controller\\UserController::apiList'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_web', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
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
                    .'|dmin/roles/(?'
                        .'|(\\d+)(*:174)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:201)'
                                .'|toggle\\-status(*:223)'
                                .'|duplicate(*:240)'
                                .'|permissions(*:259)'
                            .')'
                            .'|(*:268)'
                        .')'
                        .'|permissions\\-matrix(*:296)'
                    .')'
                .')'
                .'|/conventions/(?'
                    .'|([^/]++)(?'
                        .'|(*:333)'
                        .'|/(?'
                            .'|modifier(*:353)'
                            .'|su(?'
                                .'|pprimer(*:373)'
                                .'|spendre(*:388)'
                            .')'
                            .'|cloturer(*:405)'
                            .'|reactiver(*:422)'
                            .'|annuler(*:437)'
                        .')'
                    .')'
                    .'|dashboard(*:456)'
                .')'
                .'|/decaissements/([^/]++)(?'
                    .'|(*:491)'
                    .'|/(?'
                        .'|modifier(*:511)'
                        .'|supprimer(*:528)'
                        .'|valider(*:543)'
                        .'|executer(*:559)'
                        .'|rejeter(*:574)'
                        .'|annuler(*:589)'
                    .')'
                .')'
                .'|/financements/([^/]++)(?'
                    .'|/edit(*:629)'
                    .'|(*:637)'
                    .'|(*:645)'
                .')'
                .'|/institutions/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:687)'
                        .'|toggle\\-status(*:709)'
                    .')'
                    .'|(*:718)'
                    .'|(*:726)'
                .')'
                .'|/p(?'
                    .'|artners/([^/]++)(?'
                        .'|(*:759)'
                        .'|/(?'
                            .'|edit(*:775)'
                            .'|toggle\\-status(*:797)'
                        .')'
                        .'|(*:806)'
                    .')'
                    .'|rojects/([^/]++)(?'
                        .'|(*:834)'
                        .'|/(?'
                            .'|edit(*:850)'
                            .'|toggle\\-status(*:872)'
                            .'|update\\-progress(*:896)'
                            .'|duplicate(*:913)'
                        .')'
                        .'|(*:922)'
                    .')'
                .')'
                .'|/top\\-management/(?'
                    .'|project/([^/]++)(*:968)'
                    .'|financing/([^/]++)(*:994)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1023)'
                        .'|/(?'
                            .'|edit(*:1040)'
                            .'|toggle\\-status(*:1063)'
                        .')'
                        .'|(*:1073)'
                    .')'
                    .'|api/(?'
                        .'|([^/]++)(*:1098)'
                        .'|stats(*:1112)'
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
        174 => [[['_route' => 'app_roles_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_roles_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'app_roles_toggle_status', '_controller' => 'App\\Controller\\RoleController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        240 => [[['_route' => 'app_roles_duplicate', '_controller' => 'App\\Controller\\RoleController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        259 => [[['_route' => 'app_roles_api_permissions', '_controller' => 'App\\Controller\\RoleController::apiPermissions'], ['id'], ['GET' => 0], null, false, false, null]],
        268 => [[['_route' => 'app_roles_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_roles_permissions_matrix', '_controller' => 'App\\Controller\\RoleController::permissionsMatrix'], [], ['GET' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_convention_show', '_controller' => 'App\\Controller\\ConventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_convention_edit', '_controller' => 'App\\Controller\\ConventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'app_convention_delete', '_controller' => 'App\\Controller\\ConventionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        388 => [[['_route' => 'app_convention_suspend', '_controller' => 'App\\Controller\\ConventionController::suspend'], ['id'], ['POST' => 0], null, false, false, null]],
        405 => [[['_route' => 'app_convention_close', '_controller' => 'App\\Controller\\ConventionController::close'], ['id'], ['POST' => 0], null, false, false, null]],
        422 => [[['_route' => 'app_convention_reactivate', '_controller' => 'App\\Controller\\ConventionController::reactivate'], ['id'], ['POST' => 0], null, false, false, null]],
        437 => [[['_route' => 'app_convention_cancel', '_controller' => 'App\\Controller\\ConventionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        456 => [[['_route' => 'app_convention_dashboard', '_controller' => 'App\\Controller\\ConventionController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        491 => [[['_route' => 'app_decaissement_show', '_controller' => 'App\\Controller\\DecaissementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_decaissement_edit', '_controller' => 'App\\Controller\\DecaissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'app_decaissement_delete', '_controller' => 'App\\Controller\\DecaissementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        543 => [[['_route' => 'app_decaissement_validate', '_controller' => 'App\\Controller\\DecaissementController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        559 => [[['_route' => 'app_decaissement_execute', '_controller' => 'App\\Controller\\DecaissementController::execute'], ['id'], ['POST' => 0], null, false, false, null]],
        574 => [[['_route' => 'app_decaissement_reject', '_controller' => 'App\\Controller\\DecaissementController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        589 => [[['_route' => 'app_decaissement_cancel', '_controller' => 'App\\Controller\\DecaissementController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        629 => [[['_route' => 'app_financements_edit', '_controller' => 'App\\Controller\\FinancementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        637 => [[['_route' => 'app_financements_delete', '_controller' => 'App\\Controller\\FinancementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        645 => [[['_route' => 'app_financements_show', '_controller' => 'App\\Controller\\FinancementController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'app_institutions_edit', '_controller' => 'App\\Controller\\InstitutionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        709 => [[['_route' => 'app_institutions_toggle_status', '_controller' => 'App\\Controller\\InstitutionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        718 => [[['_route' => 'app_institutions_delete', '_controller' => 'App\\Controller\\InstitutionController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        726 => [[['_route' => 'app_institutions_show', '_controller' => 'App\\Controller\\InstitutionController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        759 => [[['_route' => 'app_partners_show', '_controller' => 'App\\Controller\\PartnerController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        775 => [[['_route' => 'app_partners_edit', '_controller' => 'App\\Controller\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        797 => [[['_route' => 'app_partners_toggle_status', '_controller' => 'App\\Controller\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        806 => [[['_route' => 'app_partners_delete', '_controller' => 'App\\Controller\\PartnerController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        834 => [[['_route' => 'app_projects_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        850 => [[['_route' => 'app_projects_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'app_projects_toggle_status', '_controller' => 'App\\Controller\\ProjectController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        896 => [[['_route' => 'app_projects_update_progress', '_controller' => 'App\\Controller\\ProjectController::updateProgress'], ['id'], ['POST' => 0], null, false, false, null]],
        913 => [[['_route' => 'app_projects_duplicate', '_controller' => 'App\\Controller\\ProjectController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        922 => [[['_route' => 'app_projects_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        968 => [[['_route' => 'app_top_management_project_detail', '_controller' => 'App\\Controller\\TopManagementController::projectDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        994 => [[['_route' => 'app_top_management_financing_detail', '_controller' => 'App\\Controller\\TopManagementController::financingDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        1023 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1040 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1063 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1073 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1098 => [[['_route' => 'app_user_api_show', '_controller' => 'App\\Controller\\UserController::apiShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1112 => [
            [['_route' => 'app_user_api_stats', '_controller' => 'App\\Controller\\UserController::apiStats'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
