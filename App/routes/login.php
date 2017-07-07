<?php

$prefix     = 'login';
$controller = 'Auth\AuthController';

$ar["{$prefix}"]     = ['route' => "/{$prefix}/entrar",          'controller' => $controller, 'method'=>'GET',  'action' => 'getLogin'   ];


/*
$ar['auth.login']     = ['route' => '/auth/login',    'controller' => 'AuthController', 'method'=>'POST', 'action' => 'postLogin'  ];
$ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => 'AuthController', 'method'=>'GET',  'action' => 'logout'     ];
*/