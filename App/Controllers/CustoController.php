<?php
namespace App\Controllers;

use App\Models\Custo;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class CustoController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Custo();
    }

}
