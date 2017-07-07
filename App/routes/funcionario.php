<?php

$prefix     = 'funcionario';
$controller = 'FuncionarioController';

$ar["{$prefix}"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'action' => 'index'   ];


/*
$ar['auth.login']     = ['route' => '/auth/login',    'controller' => 'AuthController', 'method'=>'POST', 'action' => 'postLogin'  ];
$ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => 'AuthController', 'method'=>'GET',  'action' => 'logout'     ];
*/