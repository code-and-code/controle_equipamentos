<?php

$prefix     = 'entrada';
$controller = 'EntradaController';
$auth       = config('app.auth');

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'index'   ];
$ar["{$prefix}.create"]    = ['route' => "/{$prefix}/novo",     'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'create'  ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",   'controller' => $controller, 'method'=>'POST',  'auth' =>$auth, 'action' => 'store'   ];
$ar["{$prefix}.delete"]    = ['route' => "/{$prefix}/deletar",  'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'delete'  ];

