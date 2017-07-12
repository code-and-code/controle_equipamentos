<?php

namespace App;

use Cac\Route\Router;

class Start
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->map();
        Router::execute();
    }

    protected function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Router::get(['route' => '/auth', 'namespace' => $this->namespace,'controller' => '\Auth\AuthController','action' => 'getLogin']);
    }
 }
