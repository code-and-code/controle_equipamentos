<?php
namespace App\Controllers;

use App\Models\Equipamento;
use App\Models\Monitor;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class MonitorController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Monitor();
    }

    public function create()
    {
        $equipamento = new Equipamento();
        echo $this->render('monitor.create', ['equipamentos' => $equipamento->All()]);
    }
}
