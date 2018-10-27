<?php

return [

    'drive' =>  'redis',

    'redis' =>  [
        'host'                  =>  '127.0.0.1',
        'port'                  =>  6379,
        'read_write_timeout'    =>  0,
        'persistent'            =>  true,
    ],

    'params' => [
        'max_queue_process' =>  100,
        'expiration'        =>  5
    ]
];
