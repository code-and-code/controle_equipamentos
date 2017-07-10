<?php

$prefix     = 'licenca';
$controller = 'LicencaController';

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'action' => 'index'   ];
$ar["{$prefix}.create"]     = ['route' => "/{$prefix}/novo",       'controller' => $controller, 'method'=>'GET',  'action' => 'create'   ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",       'controller' => $controller, 'method'=>'POST',  'action' => 'store'   ];
$ar["{$prefix}.edit"]     = ['route' => "/{$prefix}/editar",       'controller' => $controller, 'method'=>'GET',  'action' => 'edit'   ];
$ar["{$prefix}.update"]     = ['route' => "/{$prefix}/atualizar",       'controller' => $controller, 'method'=>'POST',  'action' => 'update'   ];
$ar["{$prefix}.delete"]     = ['route' => "/{$prefix}/deletar",       'controller' => $controller, 'method'=>'GET',  'action' => 'delete'   ];


$ar["{$prefix}.serial.search_licenca"]  = ['route' => "/{$prefix}/serial/por_licenca",  'controller' => 'SerialController', 'method'=>'GET', 'action' => 'findByLicenca'];
$ar["{$prefix}.serial.create"]          = ['route' => "/{$prefix}/serial/novo",         'controller' => 'SerialController', 'method'=>'GET', 'action' => 'create'  ];
$ar["{$prefix}.serial.store"]           = ['route' => "/{$prefix}/serial/gravar",       'controller' => 'SerialController', 'method'=>'POST','action' => 'store'   ];
$ar["{$prefix}.serial.edit"]            = ['route' => "/{$prefix}/serial/editar",       'controller' => 'SerialController', 'method'=>'GET', 'action' => 'edit'    ];
$ar["{$prefix}.serial.update"]          = ['route' => "/{$prefix}/serial/atualizar",    'controller' => 'SerialController', 'method'=>'POST','action' => 'update'  ];
$ar["{$prefix}.serial.delete"]          = ['route' => "/{$prefix}/serial/deletar",      'controller' => 'SerialController', 'method'=>'GET', 'action' => 'delete'  ];