<?php

$prefix     = 'local';
$controller = 'LocalController';

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'auth' =>true,   'action' => 'index'    ];
$ar["{$prefix}.create"]    = ['route' => "/{$prefix}/novo",     'controller' => $controller, 'method'=>'GET',  'auth' =>true,   'action' => 'create'   ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",   'controller' => $controller, 'method'=>'POST', 'auth' =>true,   'action' => 'store'    ];
$ar["{$prefix}.edit"]      = ['route' => "/{$prefix}/editar",   'controller' => $controller, 'method'=>'GET',  'auth' =>true,   'action' => 'edit'     ];
$ar["{$prefix}.update"]    = ['route' => "/{$prefix}/atualizar",'controller' => $controller, 'method'=>'POST', 'auth' =>true,   'action' => 'update'   ];
$ar["{$prefix}.delete"]    = ['route' => "/{$prefix}/deletar",  'controller' => $controller, 'method'=>'GET',  'auth' =>true,   'action' => 'delete'   ];

