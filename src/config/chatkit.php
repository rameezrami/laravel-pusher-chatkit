<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pusher Chat kit configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for pusher chat-kit
    |
    */
    'config' =>[
        'instance_locator' => env('CHATKIT_INSTANCE_LOCATOR', ''),
        'key' => env('CHATKIT_SECRET_KEY', ''),
        'port' => env('CHATKIT_PORT',80),
        'timeout' => env('CHATKIT_TIMEOUT',30),
        'debug' => env('CHATKIT_DEBUG',false),
        'curl_options' => [],
    ]

];
