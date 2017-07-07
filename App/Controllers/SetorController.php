<?php
namespace App\Controllers;

use App\Models\Setor;
use Cac\Controller\Action;

class SetorController extends Action
{
    private $setor;

    public function __construct()
    {
        $this->setor = new Setor();
    }

    public function index()
    {
        echo $this->render('setor.index', []);
    }

    public function create()
    {
        echo $this->render('setor.create', []);
    }

    public function store()
    {
        try{
            $this->setor->create($_POST);
            return 'Gravado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function edit()
    {
        $setor = $this->setor->find($_GET['id']);
        echo $this->render('setor.create', ['setor' => $setor]);
    }

    public function update()
    {
        try{

            $setor = $this->setor->find($_GET['id']);
            $setor->update($_POST);
            return 'Alterado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try{

            $setor = $this->setor->find($_GET['id']);
            $setor->delete();
            return 'Excludio';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
