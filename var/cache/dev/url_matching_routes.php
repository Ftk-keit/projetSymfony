<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, null, null, false, false, null]],
        '/dettes' => [[['_route' => 'app_dettes', '_controller' => 'App\\Controller\\DetteController::index'], null, null, null, false, false, null]],
        '/dette/new' => [[['_route' => 'app_dette_new', '_controller' => 'App\\Controller\\DetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payement' => [[['_route' => 'app_payement', '_controller' => 'App\\Controller\\PayementController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|components/([^/]++)(?:/([^/]++))?(*:78)'
                    .'|wdt/([^/]++)(*:97)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:138)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:175)'
                                .'|router(*:189)'
                                .'|exception(?'
                                    .'|(*:209)'
                                    .'|\\.css(*:222)'
                                .')'
                            .')'
                            .'|(*:232)'
                        .')'
                    .')'
                .')'
                .'|/article/([^/]++)(?'
                    .'|(*:263)'
                    .'|/(?'
                        .'|edit(*:279)'
                        .'|update\\-stock(*:300)'
                    .')'
                    .'|(*:309)'
                .')'
                .'|/client/dettes/([^/]++)(*:341)'
                .'|/dette/(?'
                    .'|([^/]++)/payment(*:375)'
                    .'|client/([^/]++)/payment(*:406)'
                .')'
                .'|/test\\-password/([^/]++)/([^/]++)(*:448)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:476)'
                        .'|/(?'
                            .'|edit(*:492)'
                            .'|toggle\\-active(*:514)'
                        .')'
                        .'|(*:523)'
                    .')'
                    .'|filter(*:538)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'ux_live_component', '_live_action' => 'get'], ['_live_component', '_live_action'], null, null, false, true, null]],
        97 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        138 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        175 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        209 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        222 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        232 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        263 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_article_update_stock', '_controller' => 'App\\Controller\\ArticleController::updateStock'], ['id'], ['POST' => 0], null, false, false, null]],
        309 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'dettesbyClient', '_controller' => 'App\\Controller\\ClientController::getDettesByClient'], ['idClient'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_dette_payment', '_controller' => 'App\\Controller\\DetteController::makePayment'], ['id'], ['POST' => 0], null, false, false, null]],
        406 => [[['_route' => 'app_detteClient_payment', '_controller' => 'App\\Controller\\DetteController::makePaymentClient'], ['id'], ['POST' => 0], null, false, false, null]],
        448 => [[['_route' => 'test_password', '_controller' => 'App\\Controller\\TestContollerController::testPassword'], ['email', 'plainPassword'], null, null, false, true, null]],
        476 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        514 => [[['_route' => 'app_user_toggle_active', '_controller' => 'App\\Controller\\UserController::toggleActive'], ['id'], ['POST' => 0], null, false, false, null]],
        523 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        538 => [
            [['_route' => 'app_user_filter', '_controller' => 'App\\Controller\\UserController::filter'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
