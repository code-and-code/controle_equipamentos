<?php

$prefix     = 'equipamento';
$controller = 'EquipamentoController';

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'action' => 'index'   ];
$ar["{$prefix}.create"]     = ['route' => "/{$prefix}/novo",       'controller' => $controller, 'method'=>'GET',  'action' => 'create'   ];
$ar["{$prefix}.store"]     = ['route' => "/{$prefix}/gravar",       'controller' => $controller, 'method'=>'POST',  'action' => 'store'   ];
$ar["{$prefix}.edit"]     = ['route' => "/{$prefix}/editar",       'controller' => $controller, 'method'=>'GET',  'action' => 'edit'   ];
$ar["{$prefix}.update"]     = ['route' => "/{$prefix}/atualizar",       'controller' => $controller, 'method'=>'POST',  'action' => 'update'   ];
$ar["{$prefix}.delete"]     = ['route' => "/{$prefix}/deletar",       'controller' => $controller, 'method'=>'GET',  'action' => 'delete'   ];

