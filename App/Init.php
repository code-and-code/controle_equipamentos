<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home.index']    = ['route' => '/',         'controller' =>  'HomeController', 'method'=>'GET', 'action' => 'index'];

        require 'routes/login.php';
        require 'routes/log.php';

        require 'routes/setor.php';
        require 'routes/categoria.php';
        require 'routes/local.php';
        require 'routes/marca.php';
        require 'routes/licenca.php';

        require 'routes/funcionario.php';
        require 'routes/periferico.php';
        require 'routes/computador.php';
        require 'routes/monitor.php';
        require 'routes/patrimonio.php';

        $ar['register']       = ['route' => '/register',      'controller' => 'AuthController', 'method'=>'GET', 'action' => 'getRegister' ];
        $ar['register.store'] = ['route' => '/register/store','controller' => 'AuthController', 'method'=>'POST','action' => 'postRegister'];


        $ar['user.index']     = ['route' => '/user',         'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'index'];
        $ar['user.edit']      = ['route' => '/user/edit',    'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'edit'];


        $this->setRoutes($ar);
    }

}
