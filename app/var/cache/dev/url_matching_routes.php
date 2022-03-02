<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/crud/trip' => [[['_route' => 'app_crud_trip_index', '_controller' => 'App\\Controller\\CrudTripController::index'], null, ['GET' => 0], null, true, false, null]],
        '/crud/trip/new' => [[['_route' => 'app_crud_trip_new', '_controller' => 'App\\Controller\\CrudTripController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginFormController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginFormController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/trip' => [[['_route' => 'trip', '_controller' => 'App\\Controller\\TripController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/crud/trip/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_crud_trip_show', '_controller' => 'App\\Controller\\CrudTripController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_crud_trip_edit', '_controller' => 'App\\Controller\\CrudTripController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [
            [['_route' => 'app_crud_trip_delete', '_controller' => 'App\\Controller\\CrudTripController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
