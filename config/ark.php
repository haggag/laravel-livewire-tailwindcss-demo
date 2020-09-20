<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Ark Configuration
    |--------------------------------------------------------------------------
    |
    | Ark API settings
    |
    */

    'api_base' => [
        'prod' => 'https://explorer.ark.io/api/',
        'dev' => 'https://dexplorer.ark.io/api/',
    ],

    'endpoints' => [
        'stats' => 'blockchain',
    ],

    'http_options' => [
        'timeout' => 2,
        'retry_times' => 2,
        'retry_sleep' => 100
    ]

];
