<?php
namespace App\Controllers;

use App\Models\Equipamento;
use App\Models\Monitor;
use App\Support\CrudControllerTrait;
use App\Support\PatrimonioCrudControllerTrait;
use Cac\Controller\Action;

class MonitorController extends Action
{
    public $model;
    public $categoria;

    use PatrimonioCrudControllerTrait;

    public function __construct()
    {
        $this->model = new Monitor();
        $this->categoria = 'monitor';
    }
}
