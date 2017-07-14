<?php

return [
    
    'public'    => false,
    'timezone' => 'UTC',

    'database' => [ 'host'     => 'mysql873.umbler.com:41890',
        'dbname'   => 'equipamento',
        'username' => 'equipamento',
        'password' =>  'info1605'
    ],

    'layout' => [

        'folder'     => '../App/views/',
        'tag'       => ['{','}'],
        'extension' => '.code.twig',
        'cache'     => '../storage/compilation_cache'
    ],

    'file'  => [
        'folder' => 'images'
    ],

    'cache'  => [ 'active' => true,
        'folder' => '../storage/cache',
    ],

    'log'  => [ 'file' => 'main.log',
               'folder' => '../storage/log',
    ],

    'providers'=> [
                    'App\StartProvider',
                    'App\AuthProvider',
    ]
];

