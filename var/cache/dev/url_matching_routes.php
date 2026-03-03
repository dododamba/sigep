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
        '/activity' => [[['_route' => 'app_activity_index', '_controller' => 'App\\Controller\\ActivityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/activity/api/recent' => [[['_route' => 'app_activity_api_recent', '_controller' => 'App\\Controller\\ActivityController::apiRecent'], null, ['GET' => 0], null, false, false, null]],
        '/activity/api/stats' => [[['_route' => 'app_activity_api_stats', '_controller' => 'App\\Controller\\ActivityController::apiStats'], null, ['GET' => 0], null, false, false, null]],
        '/activity/api/search' => [[['_route' => 'app_activity_api_search', '_controller' => 'App\\Controller\\ActivityController::apiSearch'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|ctivity/(?'
                        .'|([^/]++)(*:110)'
                        .'|user/([^/]++)(*:131)'
                        .'|e(?'
                            .'|ntity/([^/]++)/([^/]++)(*:166)'
                            .'|xport(*:179)'
                        .')'
                        .'|cleanup(*:195)'
                    .')'
                    .'|udits/([^/]++)(?'
                        .'|(*:221)'
                        .'|/(?'
                            .'|modifier(*:241)'
                            .'|supprimer(*:258)'
                            .'|document/([^/]++)/supprimer(*:293)'
                            .'|photo/([^/]++)/supprimer(*:325)'
                        .')'
                    .')'
                    .'|dmin/roles/(?'
                        .'|(\\d+)(*:354)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:381)'
                                .'|toggle\\-status(*:403)'
                                .'|duplicate(*:420)'
                                .'|permissions(*:439)'
                            .')'
                            .'|(*:448)'
                        .')'
                        .'|permissions\\-matrix(*:476)'
                    .')'
                .')'
                .'|/conventions/(?'
                    .'|([^/]++)(?'
                        .'|(*:513)'
                        .'|/(?'
                            .'|modifier(*:533)'
                            .'|su(?'
                                .'|pprimer(*:553)'
                                .'|spendre(*:568)'
                            .')'
                            .'|cloturer(*:585)'
                            .'|reactiver(*:602)'
                            .'|annuler(*:617)'
                        .')'
                    .')'
                    .'|dashboard(*:636)'
                .')'
                .'|/decaissements/([^/]++)(?'
                    .'|(*:671)'
                    .'|/(?'
                        .'|modifier(*:691)'
                        .'|supprimer(*:708)'
                        .'|valider(*:723)'
                        .'|executer(*:739)'
                        .'|rejeter(*:754)'
                        .'|annuler(*:769)'
                    .')'
                .')'
                .'|/financements/([^/]++)(?'
                    .'|/edit(*:809)'
                    .'|(*:817)'
                    .'|(*:825)'
                .')'
                .'|/institutions/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:867)'
                        .'|toggle\\-status(*:889)'
                    .')'
                    .'|(*:898)'
                    .'|(*:906)'
                .')'
                .'|/p(?'
                    .'|artners/([^/]++)(?'
                        .'|(*:939)'
                        .'|/(?'
                            .'|edit(*:955)'
                            .'|toggle\\-status(*:977)'
                        .')'
                        .'|(*:986)'
                    .')'
                    .'|rojects/([^/]++)(?'
                        .'|(*:1014)'
                        .'|/(?'
                            .'|edit(*:1031)'
                            .'|toggle\\-status(*:1054)'
                            .'|update\\-progress(*:1079)'
                            .'|duplicate(*:1097)'
                        .')'
                        .'|(*:1107)'
                    .')'
                .')'
                .'|/top\\-management/(?'
                    .'|project/([^/]++)(*:1154)'
                    .'|financing/([^/]++)(*:1181)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1211)'
                        .'|/(?'
                            .'|edit(*:1228)'
                            .'|toggle\\-status(*:1251)'
                        .')'
                        .'|(*:1261)'
                    .')'
                    .'|api/(?'
                        .'|([^/]++)(*:1286)'
                        .'|stats(*:1300)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        110 => [[['_route' => 'app_activity_show', '_controller' => 'App\\Controller\\ActivityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_activity_user', '_controller' => 'App\\Controller\\ActivityController::userHistory'], ['id'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'app_activity_entity', '_controller' => 'App\\Controller\\ActivityController::entityHistory'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        179 => [[['_route' => 'app_activity_export', '_controller' => 'App\\Controller\\ActivityController::export'], [], ['GET' => 0], null, false, false, null]],
        195 => [[['_route' => 'app_activity_cleanup', '_controller' => 'App\\Controller\\ActivityController::cleanup'], [], ['POST' => 0], null, false, false, null]],
        221 => [[['_route' => 'app_audit_show', '_controller' => 'App\\Controller\\AuditController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_audit_edit', '_controller' => 'App\\Controller\\AuditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_audit_delete', '_controller' => 'App\\Controller\\AuditController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        293 => [[['_route' => 'app_audit_delete_document', '_controller' => 'App\\Controller\\AuditController::deleteDocument'], ['id', 'index'], ['POST' => 0], null, false, false, null]],
        325 => [[['_route' => 'app_audit_delete_photo', '_controller' => 'App\\Controller\\AuditController::deletePhoto'], ['id', 'index'], ['POST' => 0], null, false, false, null]],
        354 => [[['_route' => 'app_roles_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        381 => [[['_route' => 'app_roles_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'app_roles_toggle_status', '_controller' => 'App\\Controller\\RoleController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'app_roles_duplicate', '_controller' => 'App\\Controller\\RoleController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        439 => [[['_route' => 'app_roles_api_permissions', '_controller' => 'App\\Controller\\RoleController::apiPermissions'], ['id'], ['GET' => 0], null, false, false, null]],
        448 => [[['_route' => 'app_roles_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        476 => [[['_route' => 'app_roles_permissions_matrix', '_controller' => 'App\\Controller\\RoleController::permissionsMatrix'], [], ['GET' => 0], null, false, false, null]],
        513 => [[['_route' => 'app_convention_show', '_controller' => 'App\\Controller\\ConventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'app_convention_edit', '_controller' => 'App\\Controller\\ConventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [[['_route' => 'app_convention_delete', '_controller' => 'App\\Controller\\ConventionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        568 => [[['_route' => 'app_convention_suspend', '_controller' => 'App\\Controller\\ConventionController::suspend'], ['id'], ['POST' => 0], null, false, false, null]],
        585 => [[['_route' => 'app_convention_close', '_controller' => 'App\\Controller\\ConventionController::close'], ['id'], ['POST' => 0], null, false, false, null]],
        602 => [[['_route' => 'app_convention_reactivate', '_controller' => 'App\\Controller\\ConventionController::reactivate'], ['id'], ['POST' => 0], null, false, false, null]],
        617 => [[['_route' => 'app_convention_cancel', '_controller' => 'App\\Controller\\ConventionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        636 => [[['_route' => 'app_convention_dashboard', '_controller' => 'App\\Controller\\ConventionController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        671 => [[['_route' => 'app_decaissement_show', '_controller' => 'App\\Controller\\DecaissementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        691 => [[['_route' => 'app_decaissement_edit', '_controller' => 'App\\Controller\\DecaissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        708 => [[['_route' => 'app_decaissement_delete', '_controller' => 'App\\Controller\\DecaissementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        723 => [[['_route' => 'app_decaissement_validate', '_controller' => 'App\\Controller\\DecaissementController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        739 => [[['_route' => 'app_decaissement_execute', '_controller' => 'App\\Controller\\DecaissementController::execute'], ['id'], ['POST' => 0], null, false, false, null]],
        754 => [[['_route' => 'app_decaissement_reject', '_controller' => 'App\\Controller\\DecaissementController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        769 => [[['_route' => 'app_decaissement_cancel', '_controller' => 'App\\Controller\\DecaissementController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        809 => [[['_route' => 'app_financements_edit', '_controller' => 'App\\Controller\\FinancementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        817 => [[['_route' => 'app_financements_delete', '_controller' => 'App\\Controller\\FinancementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_financements_show', '_controller' => 'App\\Controller\\FinancementController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        867 => [[['_route' => 'app_institutions_edit', '_controller' => 'App\\Controller\\InstitutionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        889 => [[['_route' => 'app_institutions_toggle_status', '_controller' => 'App\\Controller\\InstitutionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        898 => [[['_route' => 'app_institutions_delete', '_controller' => 'App\\Controller\\InstitutionController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        906 => [[['_route' => 'app_institutions_show', '_controller' => 'App\\Controller\\InstitutionController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        939 => [[['_route' => 'app_partners_show', '_controller' => 'App\\Controller\\PartnerController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        955 => [[['_route' => 'app_partners_edit', '_controller' => 'App\\Controller\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        977 => [[['_route' => 'app_partners_toggle_status', '_controller' => 'App\\Controller\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        986 => [[['_route' => 'app_partners_delete', '_controller' => 'App\\Controller\\PartnerController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        1014 => [[['_route' => 'app_projects_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        1031 => [[['_route' => 'app_projects_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1054 => [[['_route' => 'app_projects_toggle_status', '_controller' => 'App\\Controller\\ProjectController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1079 => [[['_route' => 'app_projects_update_progress', '_controller' => 'App\\Controller\\ProjectController::updateProgress'], ['id'], ['POST' => 0], null, false, false, null]],
        1097 => [[['_route' => 'app_projects_duplicate', '_controller' => 'App\\Controller\\ProjectController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        1107 => [[['_route' => 'app_projects_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1154 => [[['_route' => 'app_top_management_project_detail', '_controller' => 'App\\Controller\\TopManagementController::projectDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        1181 => [[['_route' => 'app_top_management_financing_detail', '_controller' => 'App\\Controller\\TopManagementController::financingDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        1211 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1251 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1261 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1286 => [[['_route' => 'app_user_api_show', '_controller' => 'App\\Controller\\UserController::apiShow'], ['id'], ['GET' => 0], null, false, true, null]],
        1300 => [
            [['_route' => 'app_user_api_stats', '_controller' => 'App\\Controller\\UserController::apiStats'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
