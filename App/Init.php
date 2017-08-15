<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{

    public $auth = true;

    protected function initRoutes()
    {
        $ar['home.index']    = ['route' => '/',         'controller' =>  'HomeController', 'method'=>'GET', 'action' => 'index'];

        require 'routes/log.php';
        require 'routes/setor.php';
        require 'routes/categoria.php';
        require 'routes/custo.php';
        require 'routes/local.php';
        require 'routes/marca.php';
        require 'routes/licenca.php';
        require 'routes/equipamento.php';

        require 'routes/funcionario.php';
        require 'routes/periferico.php';
        require 'routes/computador.php';
        require 'routes/monitor.php';
        require 'routes/patrimonio.php';
        require 'routes/entrada.php';
        require 'routes/saida.php';

        $this->setRoutes($ar);
    }

}
