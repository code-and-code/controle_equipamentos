<?php
namespace App\Controllers;

use App\Models\Categoria;
use App\Models\Funcionario;
use App\Models\Local;
use App\Models\Patrimonio;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class PatrimonioController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Patrimonio();
    }

    public function create()
    {
        $local = new Local();
        $funcionario = new Funcionario();
        $categoria = new Categoria();
        echo $this->render('patrimonio.create', ['locais' => $local->all(), 'funcionarios' =>  $funcionario->all(), 'categorias' => $categoria->all()]);
    }
}
