<?php
namespace App\Controllers;

use App\Models\Equipamento;
use App\Models\Funcionario;
use App\Models\Saida;
use App\Models\Setor;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;
use Cac\Support\Validation;

class SaidaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Saida();
    }

    public function create()
    {
        $equipamento    = new Equipamento();
        $setor          = new Setor();
        $funcionario    = new Funcionario();
        echo $this->render("saida.create", ['setores' => $setor->all(),'funcionarios' => $funcionario->all(),'equipamentos' => $equipamento->where('qtd','>',0)->get()]);
    }

    public function store()
    {
        try{
            Validation::requireModel($this->model,$_POST);

            $saida = $this->model->fill($_POST);

            if($saida->Equipamento()->qtd < $saida->qtd)
            {
                throw new \Exception('Quantidade indisponivel no estoque :(');
            }

            $saida->save();
            back('Gravado');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }
}
