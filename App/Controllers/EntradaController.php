<?php
namespace App\Controllers;

use App\Models\Custo;
use App\Models\Entrada;
use App\Models\Equipamento;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class EntradaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model       = new Entrada();

    }

    public function create()
    {
        $equipamento = new Equipamento();
        $custo       = new Custo();

        echo $this->render("entrada.create", ['equipamentos' => $equipamento->all(),'custos' => $custo->all()]);
    }

}
