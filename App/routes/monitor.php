<?php

$prefix     = 'monitor';
$controller = 'MonitorController';
$auth       = config('app.auth');

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'auth' =>$auth,'action' => 'index'    ];
$ar["{$prefix}.create"]    = ['route' => "/{$prefix}/novo",     'controller' => $controller, 'method'=>'GET',  'auth' =>$auth,'action' => 'create'   ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",   'controller' => $controller, 'method'=>'POST', 'auth' =>$auth,'action' => 'store'    ];
$ar["{$prefix}.edit"]      = ['route' => "/{$prefix}/editar",   'controller' => $controller, 'method'=>'GET',  'auth' =>$auth,'action' => 'edit'     ];
$ar["{$prefix}.update"]    = ['route' => "/{$prefix}/atualizar",'controller' => $controller, 'method'=>'POST', 'auth' =>$auth,'action' => 'update'   ];
$ar["{$prefix}.delete"]    = ['route' => "/{$prefix}/deletar",  'controller' => $controller, 'method'=>'GET',  'auth' =>$auth,'action' => 'delete'   ];
$ar["{$prefix}.duplicate"] = ['route' => "/{$prefix}/duplicar", 'controller' => $controller, 'method'=>'GET',  'auth' =>$auth,'action' => 'duplicate'];
