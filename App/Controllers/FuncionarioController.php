<?php
namespace App\Controllers;

use App\Models\Funcionario;
use App\Models\Setor;
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

    public function create()
    {
        $setor = new Setor();
        echo $this->render('funcionario.create', ['setores' => $setor->All()]);
    }

    public function edit()
    {
        $setor = new Setor();
        echo $this->render('funcionario.edit', ['setores' => $setor->All(),'funcionario' => $this->model->find($_GET['id'])]);
    }

    public function findBySetor()
    {
        $funcionarios = $this->model->where('setor_id', '=' ,$_GET['id'])->get();
        echo $this->render('funcionario.index', ['results' =>$funcionarios]);
    }
}
