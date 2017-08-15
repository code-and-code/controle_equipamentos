<?php
namespace App\Controllers;

use App\Models\Equipamento;
use App\Models\Periferico;
use App\Support\PatrimonioCrudControllerTrait;
use Cac\Controller\Action;

class PerifericoController extends Action
{
    public $model;
    public $categoria; //nome do array na view que representa a classe

    use PatrimonioCrudControllerTrait;

    public function __construct()
    {
        $this->model = new Periferico();
        $this->categoria = 'periferico';
    }

}
