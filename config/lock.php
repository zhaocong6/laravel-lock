<?php

return [

    'drive' =>  'redis',

    'redis' =>  [
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'port' => env('REDIS_PORT', 6379),
        'read_write_timeout' => 0,
        'persistent' => true,
        'parameters'            =>[
            'password'=>env('REDIS_PASSWORD', null)
        ],
    ],

    'params' => [
        'max_queue_process' =>  100,
        'expiration'        =>  5
    ]
];
