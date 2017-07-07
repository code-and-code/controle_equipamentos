<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home.index']    = ['route' => '/',         'controller' =>  'HomeController', 'method'=>'GET', 'action' => 'index'];

        require 'routes/login.php';
        require 'routes/funcionario.php';

        $ar['register']       = ['route' => '/register',      'controller' => 'AuthController', 'method'=>'GET', 'action' => 'getRegister' ];
        $ar['register.store'] = ['route' => '/register/store','controller' => 'AuthController', 'method'=>'POST','action' => 'postRegister'];


        $ar['user.index']     = ['route' => '/user',         'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'index'];
        $ar['user.edit']      = ['route' => '/user/edit',    'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'edit'];


        $this->setRoutes($ar);
    }

}
