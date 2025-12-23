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
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::adminDashboard'], null, null, null, false, false, null]],
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
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|dmin/(?'
                        .'|role/([^/]++)(?'
                            .'|(*:179)'
                            .'|/edit(*:192)'
                            .'|(*:200)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:225)'
                            .'|/(?'
                                .'|edit(*:241)'
                                .'|toggle\\-status(*:263)'
                            .')'
                            .'|(*:272)'
                        .')'
                    .')'
                .')'
                .'|/conventions/(?'
                    .'|([^/]++)(?'
                        .'|(*:310)'
                        .'|/(?'
                            .'|modifier(*:330)'
                            .'|su(?'
                                .'|pprimer(*:350)'
                                .'|spendre(*:365)'
                            .')'
                            .'|cloturer(*:382)'
                            .'|reactiver(*:399)'
                            .'|annuler(*:414)'
                        .')'
                    .')'
                    .'|dashboard(*:433)'
                .')'
                .'|/decaissements/([^/]++)(?'
                    .'|(*:468)'
                    .'|/(?'
                        .'|modifier(*:488)'
                        .'|supprimer(*:505)'
                        .'|valider(*:520)'
                        .'|executer(*:536)'
                        .'|rejeter(*:551)'
                        .'|annuler(*:566)'
                    .')'
                .')'
                .'|/financements/([^/]++)(?'
                    .'|/edit(*:606)'
                    .'|(*:614)'
                    .'|(*:622)'
                .')'
                .'|/institutions/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:664)'
                        .'|toggle\\-status(*:686)'
                    .')'
                    .'|(*:695)'
                    .'|(*:703)'
                .')'
                .'|/p(?'
                    .'|artners/([^/]++)(?'
                        .'|(*:736)'
                        .'|/(?'
                            .'|edit(*:752)'
                            .'|toggle\\-status(*:774)'
                        .')'
                        .'|(*:783)'
                    .')'
                    .'|rojects/([^/]++)(?'
                        .'|(*:811)'
                        .'|/(?'
                            .'|edit(*:827)'
                            .'|toggle\\-status(*:849)'
                            .'|update\\-progress(*:873)'
                            .'|duplicate(*:890)'
                        .')'
                        .'|(*:899)'
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
        179 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        192 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        225 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_user_toggle_status', '_controller' => 'App\\Controller\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        272 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_convention_show', '_controller' => 'App\\Controller\\ConventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        330 => [[['_route' => 'app_convention_edit', '_controller' => 'App\\Controller\\ConventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_convention_delete', '_controller' => 'App\\Controller\\ConventionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        365 => [[['_route' => 'app_convention_suspend', '_controller' => 'App\\Controller\\ConventionController::suspend'], ['id'], ['POST' => 0], null, false, false, null]],
        382 => [[['_route' => 'app_convention_close', '_controller' => 'App\\Controller\\ConventionController::close'], ['id'], ['POST' => 0], null, false, false, null]],
        399 => [[['_route' => 'app_convention_reactivate', '_controller' => 'App\\Controller\\ConventionController::reactivate'], ['id'], ['POST' => 0], null, false, false, null]],
        414 => [[['_route' => 'app_convention_cancel', '_controller' => 'App\\Controller\\ConventionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        433 => [[['_route' => 'app_convention_dashboard', '_controller' => 'App\\Controller\\ConventionController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        468 => [[['_route' => 'app_decaissement_show', '_controller' => 'App\\Controller\\DecaissementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_decaissement_edit', '_controller' => 'App\\Controller\\DecaissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_decaissement_delete', '_controller' => 'App\\Controller\\DecaissementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        520 => [[['_route' => 'app_decaissement_validate', '_controller' => 'App\\Controller\\DecaissementController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        536 => [[['_route' => 'app_decaissement_execute', '_controller' => 'App\\Controller\\DecaissementController::execute'], ['id'], ['POST' => 0], null, false, false, null]],
        551 => [[['_route' => 'app_decaissement_reject', '_controller' => 'App\\Controller\\DecaissementController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        566 => [[['_route' => 'app_decaissement_cancel', '_controller' => 'App\\Controller\\DecaissementController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        606 => [[['_route' => 'app_financements_edit', '_controller' => 'App\\Controller\\FinancementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        614 => [[['_route' => 'app_financements_delete', '_controller' => 'App\\Controller\\FinancementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        622 => [[['_route' => 'app_financements_show', '_controller' => 'App\\Controller\\FinancementController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        664 => [[['_route' => 'app_institutions_edit', '_controller' => 'App\\Controller\\InstitutionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'app_institutions_toggle_status', '_controller' => 'App\\Controller\\InstitutionController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        695 => [[['_route' => 'app_institutions_delete', '_controller' => 'App\\Controller\\InstitutionController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        703 => [[['_route' => 'app_institutions_show', '_controller' => 'App\\Controller\\InstitutionController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        736 => [[['_route' => 'app_partners_show', '_controller' => 'App\\Controller\\PartnerController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        752 => [[['_route' => 'app_partners_edit', '_controller' => 'App\\Controller\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        774 => [[['_route' => 'app_partners_toggle_status', '_controller' => 'App\\Controller\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        783 => [[['_route' => 'app_partners_delete', '_controller' => 'App\\Controller\\PartnerController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        811 => [[['_route' => 'app_projects_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        827 => [[['_route' => 'app_projects_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        849 => [[['_route' => 'app_projects_toggle_status', '_controller' => 'App\\Controller\\ProjectController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        873 => [[['_route' => 'app_projects_update_progress', '_controller' => 'App\\Controller\\ProjectController::updateProgress'], ['id'], ['POST' => 0], null, false, false, null]],
        890 => [[['_route' => 'app_projects_duplicate', '_controller' => 'App\\Controller\\ProjectController::duplicate'], ['id'], ['POST' => 0], null, false, false, null]],
        899 => [
            [['_route' => 'app_projects_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
