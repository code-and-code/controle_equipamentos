<?php
namespace App\Controllers;

use App\Models\Categoria;
use App\Models\Equipamento;
use App\Models\Marca;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class EquipamentoController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Equipamento();
    }

    public function create()
    {
        $marca      = new Marca();
        $categoria  = new Categoria();

        echo $this->render('equipamento.create', ['marcas' => $marca->All(), 'categorias' => $categoria->all()]);
    }

    public function edit()
    {
        $marca      = new Marca();
        $categoria  = new Categoria();
        echo $this->render('equipamento.edit', ['marcas' => $marca->All(), 'categorias' => $categoria->all(),'equipamento' => $this->model->find($_GET['id'])]);
    }

    public function findBySetor()
    {
        $funcionarios = $this->model->where('setor_id', '=' ,$_GET['id'])->get();
        echo $this->render('funcionario.index', ['results' =>$funcionarios]);
    }
}
