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
        'instance_locator' => env('CHATKIT_INSTANCE_LOCATOR', 'v1:us1:242ae889-2e35-45ab-a3fd-325cb1e8a563'),
        'key' => env('CHATKIT_SECRET_KEY', 'd6ee9ff2-e88d-4342-8e93-6ea286cac968:df8LHZdVZo3lAnBnw4csnKfTtZ0VQqMPj56L5xOY2EY='),
        'port' => env('CHATKIT_PORT',80),
        'timeout' => env('CHATKIT_TIMEOUT',30),
        'debug' => env('CHATKIT_DEBUG',false),
        'curl_options' => [],
    ]

];
