<?php

namespace App\Support;


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
            $this->getModelClass()->create($_POST);
            back('Gravado');

        }catch (\Exception $e)
        {
            $this->fail($e->getMessage());
        }
    }

    public function edit()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            echo $this->render("{$this->getNameModel()}.edit", [$this->getNameModel() => $r]);

        }catch (\Exception $e)
        {
            $this->fail($e->getMessage());
        }
    }

    public function update()
    {
        try{

            $r = $this->getModelClass()->find($_GET['id']);
            $r->update($_POST);
            back('Alterado');

        }catch (\Exception $e)
        {
            $this->fail($e->getMessage());
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
            $this->fail($e->getMessage());
        }
    }

    public function fail($error)
    {
        alert('error','Não foi possível realizar esta operação');
        back($error,'info');
    }
}