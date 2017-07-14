<?php

namespace App;

use Cac\Route\Router;

class AuthProvider
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->mapRoutes();
    }

    protected function mapRoutes()
    {
        Router::get(['route' => '/login', 'namespace' => $this->namespace,'controller' => '\Auth\AuthController','action' => 'getLogin']);
    }

 }
