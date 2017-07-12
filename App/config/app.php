<?php

return [
    
    'public'    => false,
    'timezone' => 'UTC',

    'database' => [ 'host'     => 'mysql873.umbler.com:41890',
        'dbname'   => 'equipamento',
        'username' => 'equipamento',
        'password' =>  'info1605'
    ],

    /*'database' => [ 'host'     => '127.0.0.1',
        'dbname'   => 'equipamento',
        'username' => 'root',
        'password' =>  '123456'
    ],*/

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
    ]
];

