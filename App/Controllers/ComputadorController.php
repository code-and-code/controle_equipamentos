<?php
namespace App\Controllers;

use App\Models\Computador;
use App\Models\Equipamento;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class ComputadorController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Computador();
    }

    public function create()
    {
        $equipamento = new Equipamento();
        echo $this->render('computador.create', ['equipamentos' => $equipamento->All()]);
    }
}
