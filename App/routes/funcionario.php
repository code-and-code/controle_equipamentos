<?php

$prefix     = 'funcionario';
$controller = 'FuncionarioController';

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'action' => 'index'   ];
$ar["{$prefix}.create"]     = ['route' => "/{$prefix}/novo",       'controller' => $controller, 'method'=>'GET',  'action' => 'create'   ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",       'controller' => $controller, 'method'=>'POST',  'action' => 'store'   ];


/*
$ar['auth.login']     = ['route' => '/auth/login',    'controller' => 'AuthController', 'method'=>'POST', 'action' => 'postLogin'  ];
$ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => 'AuthController', 'method'=>'GET',  'action' => 'logout'     ];
*/