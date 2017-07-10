<?php

$prefix     = 'log';
$controller = 'Log\LogController';

$ar["{$prefix}.index"]     = ['route' => "/{$prefix}",          'controller' => $controller, 'method'=>'GET',  'action' => 'index'];

