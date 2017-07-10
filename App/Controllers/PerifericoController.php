<?php
namespace App\Controllers;

use App\Models\Equipamento;
use App\Models\Periferico;
use App\Models\Setor;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class PerifericoController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Periferico();
    }

    public function create()
    {
        $equipamento = new Equipamento();
        echo $this->render('periferico.create', ['equipamentos' => $equipamento->All()]);
    }
}
