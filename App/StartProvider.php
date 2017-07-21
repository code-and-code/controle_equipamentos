<?php

namespace App;

use Cac\Provider\ServiceProvider;
use Cac\Route\Router;

class StartProvider implements ServiceProvider
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->mapRoutes();
    }

    public function mapRoutes()
    {
        Router::get(['route' => '/auth', 'namespace' => $this->namespace,'controller' => '\Auth\AuthController','action' => 'getLogin']);
    }
}
