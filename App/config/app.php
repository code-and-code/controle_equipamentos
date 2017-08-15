<?php

return [
    
    'public'   => false,
    'timezone' => 'UTC',
    'url'      => 'http://127.0.0.1:8080',
    'auth'     =>  false,

    'database' => [
                    'mysql' =>  [ 'host'     => '127.0.0.1',//mysql873.umbler.com:41890
                    'dbname'   => 'equipamento',
                    'username' => 'root',
                    'password' =>  '123456'
                    ]
    ],

    'layout' => [

        'folder'     => '../App/views/',
        'tag'       => ['{','}'],
        'extension' => '.code.twig',
        'cache'     => '../storage/compilation_cache'
    ],

    'file'  => [
        'folder' => '../storage/nf'
    ],

    'cache'  => [ 'active' => true,
        'folder' => '../storage/cache',
    ],

    'log'  => [ 'file' => 'main.log',
               'folder' => '../storage/log',
    ],

    'providers'=> [
                    'App\StartProvider',
    ]
];

