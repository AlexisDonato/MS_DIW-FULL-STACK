<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/artist' => [[['_route' => 'app_artist_index', '_controller' => 'App\\Controller\\ArtistController::index'], null, ['GET' => 0], null, true, false, null]],
        '/artist/new' => [[['_route' => 'app_artist_new', '_controller' => 'App\\Controller\\ArtistController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_disc_index', '_controller' => 'App\\Controller\\DiscController::index'], null, ['GET' => 0], null, false, false, null]],
        '/disc/new' => [[['_route' => 'app_disc_new', '_controller' => 'App\\Controller\\DiscController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/artist/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/disc/([^/]++)(?'
                    .'|(*:70)'
                    .'|/edit(*:82)'
                    .'|(*:89)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:114)'
                    .'|/edit(*:127)'
                    .'|(*:135)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:175)'
                    .'|wdt/([^/]++)(*:195)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:241)'
                            .'|router(*:255)'
                            .'|exception(?'
                                .'|(*:275)'
                                .'|\\.css(*:288)'
                            .')'
                        .')'
                        .'|(*:298)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_artist_show', '_controller' => 'App\\Controller\\ArtistController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'app_artist_edit', '_controller' => 'App\\Controller\\ArtistController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'app_artist_delete', '_controller' => 'App\\Controller\\ArtistController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        70 => [[['_route' => 'app_disc_show', '_controller' => 'App\\Controller\\DiscController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_disc_edit', '_controller' => 'App\\Controller\\DiscController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'app_disc_delete', '_controller' => 'App\\Controller\\DiscController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        114 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        175 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        255 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        275 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        288 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        298 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
