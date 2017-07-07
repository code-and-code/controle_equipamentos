<?php

$prefix     = 'log';
$controller = 'Log\LogController';

$ar["{$prefix}.error"]     = ['route' => "/{$prefix}/error",          'controller' => $controller, 'method'=>'GET',  'action' => 'error'   ];


/*
$ar['auth.login']     = ['route' => '/auth/login',    'controller' => 'AuthController', 'method'=>'POST', 'action' => 'postLogin'  ];
$ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => 'AuthController', 'method'=>'GET',  'action' => 'logout'     ];
*/