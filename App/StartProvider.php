<?php

namespace App;

use Cac\Route\Router;

class StartProvider
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->mapRoutes();
    }

    protected function mapRoutes()
    {
        Router::get(['route' => '/auth', 'namespace' => $this->namespace,'controller' => '\Auth\AuthController','action' => 'getLogin']);
    }

 }
