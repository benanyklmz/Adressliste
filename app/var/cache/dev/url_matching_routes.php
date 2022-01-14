<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/list' => [[['_route' => 'adresse', '_controller' => 'App\\Controller\\AdresseController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\AdresseController::createNew'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/edit/([^/]++)(*:56)'
                .'|/delete/([^/]++)(*:79)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        56 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], null, null, false, true, null]],
        79 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
