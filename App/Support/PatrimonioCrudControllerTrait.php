<?php

namespace App\Support;

use App\Models\Custo;
use App\Models\Equipamento;
use App\Models\Funcionario;
use App\Models\Local;
use App\Models\Patrimonio;
use Cac\Exception\ModelException;
use Cac\Support\Validation;

trait PatrimonioCrudControllerTrait
{
    public function getNameModel()
    {
        $array = explode('\\',get_class($this->getModelClass()));
        return strtolower(end($array));
    }

    public function getModelClass()
    {
        return $this->model;
    }

    public function getPatrimonioClass()
    {
        return new Patrimonio();
    }

    public function getLocalClass()
    {
        return new Local();
    }

    public function getFuncionarioClass()
    {
        return new Funcionario();
    }

    public function getEquipamentoClass()
    {
        return new Equipamento();
    }

    public function getCustoClass()
    {
        return new Custo();
    }

    public function getCategory()
    {
        return $this->categoria;
    }

    public function duplicate()
    {
        $obj = $this->getModelClass()->find($_GET['id']);
        echo $this->render("{$this->getNameModel()}.create", ['equipamentos' => $this->getEquipamentoClass()->all(), 'locais' => $this->getLocalClass()->all(), 'funcionarios' => $this->getFuncionarioClass()->all(), 'model' => $obj, 'custos' => $this->getCustoClass()->all()]);
    }

    public function index()
    {
        echo $this->render("{$this->getNameModel()}.index", ['results' => $this->getModelClass()->all()]);
    }

    public function create()
    {
        echo $this->render("{$this->getNameModel()}.create", ['equipamentos' => $this->getEquipamentoClass()->all(), 'locais' => $this->getLocalClass()->all(), 'funcionarios' => $this->getFuncionarioClass()->all(), 'custos' => $this->getCustoClass()->all()]);
    }

    public function store()
    {
        try{
            Validation::requireModel($this->getModelClass(),$_POST[$this->getCategory()]);
            Validation::requireModel($this->getPatrimonioClass(), $_POST['patrimonio']);

            $patrimonio = $_POST['patrimonio'] + ['class' => get_class($this->getModelClass())];
            $patrimonio =  $this->getPatrimonioClass()->create($patrimonio);

            $computador = $_POST[$this->getCategory()] + ['patrimonio_id' => $patrimonio->id];
            $this->getModelClass()->create($computador);

            back('Gravado');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function edit()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            echo $this->render("{$this->getNameModel()}.edit",
                [
                    'equipamentos' => $this->getEquipamentoClass()->All(),
                    'locais' => $this->getLocalClass()->all(),
                    'funcionarios' => $this->getFuncionarioClass()->all(),
                    $this->getNameModel() => $r
                ]);

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function update()
    {
        try{
            Validation::requireModel($this->getModelClass(),$_POST[$this->getCategory()]);
            Validation::requireModel($this->getPatrimonioClass(), $_POST['patrimonio']);

            $model = $this->getModelClass()->find($_POST['id']);

            $model->Patrimonio()->update($_POST['patrimonio']);
            
            $model->update($_POST[$this->getCategory()]);

            back('Alterado');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function delete()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            $r->Patrimonio()->delete();
            $r->delete();
            back('Excluido');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function fail($e)
    {
        if ($e instanceof ModelException) {

            alert('error','Não foi possível realizar esta operação BANCO DE DADOS');
        }
        back($e->getMessage(),'warning');
    }
}