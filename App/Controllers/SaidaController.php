<?php
namespace App\Controllers;

use App\Models\Saida;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class SaidaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Saida();
    }

}
