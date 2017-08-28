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

    public function addComputador()
    {
        $serial = $this->model->find($_POST['serial']);
        $serial->computador_id = $_POST['computador'];
        $serial->save();
        return back('Gravado','success');
    }

    public function removeComputador()
    {
        $serial = $this->model->find($_GET['id']);
        $serial->computador_id = NULL;
        $serial->save();
        return back('Excluido','success');
    }
}
