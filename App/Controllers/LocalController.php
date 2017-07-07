<?php
namespace App\Controllers;

use App\Models\Local;
use Cac\Controller\Action;

class MarcaController extends Action
{
    private $local;

    public function __construct()
    {
        $this->local = new Local();
    }

    public function index()
    {
        echo $this->render('local.index', []);
    }

    public function create()
    {
        echo $this->render('local.create', []);
    }

    public function store()
    {
        try{
            $this->local->create($_POST);
            return 'Gravado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function edit()
    {
        $local = $this->local->find($_GET['id']);
        echo $this->render('local.create', ['local' => $local]);
    }

    public function update()
    {
        try{

            $local = $this->local->find($_GET['id']);
            $local->update($_POST);
            return 'Alterado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try{

            $local = $this->local->find($_GET['id']);
            $local->delete();
            return 'Excludio';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
