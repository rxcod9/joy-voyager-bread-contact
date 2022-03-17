<?php

return [

    /*
     * If enabled for voyager-bread-contact package.
     */
    'enabled' => env('VOYAGER_BREAD_CONTACT_ENABLED', true),

    /*
     * The config_key for voyager-bread-contact package.
     */
    'config_key' => env('VOYAGER_BREAD_CONTACT_CONFIG_KEY', 'joy-voyager-bread-contact'),

    /*
     * The route_prefix for voyager-bread-contact package.
     */
    'route_prefix' => env('VOYAGER_BREAD_CONTACT_ROUTE_PREFIX', 'joy-voyager-bread-contact'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadContact\\Http\\Controllers',
    ],
];
