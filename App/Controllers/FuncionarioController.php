<?php
namespace App\Controllers;

use App\Models\Funcionario;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class FuncionarioController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Funcionario();
    }
}
