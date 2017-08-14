<?php

namespace App;

use Cac\Interfaces\Provider;
use Cac\Route\Router;

class StartProvider implements Provider
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
