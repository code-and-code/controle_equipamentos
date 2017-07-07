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
        echo $this->render("{$this->getNameModel()}.index", []);
    }

    public function create()
    {
        echo $this->render("{$this->getNameModel()}.create", []);
    }

    public function store()
    {
        try{
            $this->getModelClass()->create($_POST);
            return 'Gravado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function edit()
    {
        $r = $this->getModelClass()->find($_GET['id']);
        echo $this->render("{$this->getNameModel()}.edit", [$this->getNameModel() => $r]);
    }

    public function update()
    {
        try{

            $r = $this->getModelClass()->find($_GET['id']);
            $r->update($_POST);
            return 'Alterado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            $r->delete();
            return 'Excludio';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}