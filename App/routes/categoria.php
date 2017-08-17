<?php

$prefix     = 'categoria';
$controller = 'CategoriaController';
$auth       = config('app.auth');

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'auth' =>$auth, 'action' => 'index'    ];

