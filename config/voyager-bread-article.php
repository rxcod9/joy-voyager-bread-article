<?php

return [

    /*
     * If enabled for voyager-bread-article package.
     */
    'enabled' => env('VOYAGER_BREAD_ARTICLE_ENABLED', true),

    /*
     * The config_key for voyager-bread-article package.
     */
    'config_key' => env('VOYAGER_BREAD_ARTICLE_CONFIG_KEY', 'joy-voyager-bread-article'),

    /*
     * The route_prefix for voyager-bread-article package.
     */
    'route_prefix' => env('VOYAGER_BREAD_ARTICLE_ROUTE_PREFIX', 'joy-voyager-bread-article'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadArticle\\Http\\Controllers',
    ],
];
