<?php

namespace App\Support;

use Cac\Support\Cache;

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
        echo $this->render("{$this->getNameModel()}.index", [[$this->getNameModel() => $this->getModelClass()->all()]]);
    }

    public function create()
    {
        echo $this->render("{$this->getNameModel()}.create", []);
    }

    public function store()
    {
        try{
            $this->getModelClass()->create($_POST);
            echo $this->render("{$this->getNameModel()}.create", ['success' => 'Gravado']);

        }catch (\Exception $e)
        {
            $this->addCacheLog($e->getMessage());
            echo $this->render("{$this->getNameModel()}.create", ['error' => 'Não foi possível realizar esta operação']);
        }
    }

    public function edit()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            echo $this->render("{$this->getNameModel()}.edit", [$this->getNameModel() => $r]);

        }catch (\Exception $e)
        {
            $this->addCacheLog($e->getMessage());
            echo $this->render("{$this->getNameModel()}.create", ['error' => 'NÃ£o foi possivel realizar esse operaÃ§Ã£o']);
        }
    }

    public function update()
    {
        try{

            $r = $this->getModelClass()->find($_GET['id']);
            $r->update($_POST);
            echo $this->render("{$this->getNameModel()}.edit", ['success' => 'Alterado']);

        }catch (\Exception $e)
        {
            $this->addCacheLog($e->getMessage());
            echo $this->render("{$this->getNameModel()}.edit", ['error' => 'NÃ£o foi possivel realizar esse operaÃ§Ã£o']);
        }
    }

    public function delete()
    {
        try{
            $r = $this->getModelClass()->find($_GET['id']);
            $r->delete();
            echo $this->render("{$this->getNameModel()}.index", ['success' => 'Excluido']);

        }catch (\Exception $e)
        {
            $this->addCacheLog($e->getMessage());
            echo $this->render("{$this->getNameModel()}.index", ['error' => 'NÃ£o foi possivel realizar esse operaÃ§Ã£o']);
        }
    }

    public function addCacheLog($msg)
    {
        Cache::set('log',[ date('d-m-Y_h:m:s') => $msg]);
    }
}