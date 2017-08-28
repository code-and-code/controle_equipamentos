<?php
namespace App\Controllers;

use App\Models\Computador;
use App\Models\Serial;
use App\Support\PatrimonioCrudControllerTrait;
use Cac\Controller\Action;

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

    public function addLicenses()
    {
        $computador = $this->model->find($_GET['id']);
        $serial    = new Serial();
        $seriais   = $serial->whereIsNull('computador_id')->get();
        echo $this->render("computador.licenses", ['seriais' => $seriais,'computador' => $computador]);
    }
}
