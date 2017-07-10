<?php

namespace App\Support;

use Cac\Exception\ModelException;
use Cac\Support\Validation;

trait CrudControllerTrait
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

    public function index()
    {
        echo $this->render("{$this->getNameModel()}.index", ['results' => $this->getModelClass()->all()]);
    }

    public function create()
    {
        echo $this->render("{$this->getNameModel()}.create", []);
    }

    public function store()
    {
        try{

            Validation::requireModel($this->getModelClass(),$_POST);
            $this->getModelClass()->create($_POST);
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
            echo $this->render("{$this->getNameModel()}.edit", [$this->getNameModel() => $r]);

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function update()
    {
        try{

            Validation::requireModel($this->getModelClass(),$_POST);
            $r = $this->getModelClass()->find($_GET['id']);
            $r->update($_POST);
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