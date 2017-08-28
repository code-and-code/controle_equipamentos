<?php

$prefix     = 'entrada';
$controller = 'EntradaController';
$auth       = config('app.auth');

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'index'   ];
$ar["{$prefix}.create"]    = ['route' => "/{$prefix}/novo",     'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'create'  ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",   'controller' => $controller, 'method'=>'POST',  'auth' =>$auth, 'action' => 'store'   ];
$ar["{$prefix}.delete"]    = ['route' => "/{$prefix}/deletar",  'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'delete'  ];

//$ar["{$prefix}.sendnf"]    = ['route' => "/{$prefix}/nova-nf",     'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'sendNf'     ];
//$ar["{$prefix}.uploadnf"]  = ['route' => "/{$prefix}/enviar-nf",   'controller' => $controller, 'method'=>'POST',  'auth' =>$auth, 'action' => 'uploadNf'   ];
//$ar["{$prefix}.deletenf"]  = ['route' => "/{$prefix}/deletar-nf",  'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'deleteNf'   ];
//$ar["{$prefix}.downloadnf"]= ['route' => "/{$prefix}/download-nf", 'controller' => $controller, 'method'=>'GET',   'auth' =>$auth, 'action' => 'downloadNf'   ];