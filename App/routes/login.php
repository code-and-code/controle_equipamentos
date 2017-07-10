<?php

$prefix     = 'login';
$controller = 'Auth\AuthController';

$ar["{$prefix}"]     = ['route' => "/{$prefix}/entrar",          'controller' => $controller, 'method'=>'GET',  'action' => 'getLogin'   ];


$ar['auth.login']     = ['route' => '/auth/login',    'controller' => $controller, 'method'=>'POST', 'action' => 'postLogin'  ];
$ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => $controller, 'method'=>'GET',  'action' => 'logout'     ];
