<?php
namespace App\Controllers;

use App\Models\Serial;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class SerialController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Serial();
    }

    public function create()
    {
        echo $this->render('serial.create', ['licenca_id' => $_GET['id']]);
    }

    public function findByLicenca()
    {
        $serial = $this->model->where('licenca_id', '=' ,$_GET['id'])->get();
        echo $this->render('serial.index', ['results' => $serial,'licenca' => $_GET['id']]);
    }
}
