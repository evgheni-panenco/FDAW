<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/smartphone' => [[['_route' => 'smartphone_index', '_controller' => 'App\\Controller\\SmartphoneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/smartphone/new/create' => [[['_route' => 'smartphone_new', '_controller' => 'App\\Controller\\SmartphoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type' => [[['_route' => 'type_index', '_controller' => 'App\\Controller\\TypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/new' => [[['_route' => 'type_new', '_controller' => 'App\\Controller\\TypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/smartphone/(?'
                    .'|([^/]++)(*:65)'
                    .'|details/([^/]++)(*:88)'
                    .'|([^/]++)/edit(*:108)'
                    .'|delete/([^/]++)(*:131)'
                .')'
                .'|/type/([^/]++)(?'
                    .'|(*:157)'
                    .'|/edit(*:170)'
                    .'|(*:178)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'find_smartphone_by_name', '_controller' => 'App\\Controller\\SmartphoneController::findAllByName'], ['name'], null, null, false, true, null]],
        88 => [[['_route' => 'smartphone_show', '_controller' => 'App\\Controller\\SmartphoneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        108 => [[['_route' => 'smartphone_edit', '_controller' => 'App\\Controller\\SmartphoneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        131 => [[['_route' => 'smartphone_delete', '_controller' => 'App\\Controller\\SmartphoneController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        157 => [[['_route' => 'type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        170 => [[['_route' => 'type_edit', '_controller' => 'App\\Controller\\TypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [
            [['_route' => 'type_delete', '_controller' => 'App\\Controller\\TypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
