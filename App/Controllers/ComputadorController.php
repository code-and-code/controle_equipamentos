<?php
namespace App\Controllers;

use App\Models\Computador;
use App\Support\PatrimonioCrudControllerTrait;
use Cac\Controller\Action;
use Cac\Support\Validation;

class ComputadorController extends Action
{
    public $model;
    public $categoria; //nome do array na view que representa a classe

    use PatrimonioCrudControllerTrait;

    public function __construct()
    {
        $this->model = new Computador();
        $this->categoria = 'computador';
    }
}
