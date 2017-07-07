<?php
namespace App\Controllers;

use App\Models\Marca;
use Cac\Controller\Action;

class MarcaController extends Action
{
    private $marca;

    public function __construct()
    {
        $this->marca = new Marca();
    }

    public function index()
    {
        echo $this->render('marca.index', []);
    }

    public function create()
    {
        echo $this->render('marca.create', []);
    }

    public function store()
    {
        try{
            $this->marca->create($_POST);
            return 'Gravado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function edit()
    {
        $marca = $this->marca->find($_GET['id']);
        echo $this->render('marca.create', ['marca' => $marca]);
    }

    public function update()
    {
        try{

            $marca = $this->marca->find($_GET['id']);
            $marca->update($_POST);
            return 'Alterado';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function delete()
    {
        try{

            $marca = $this->marca->find($_GET['id']);
            $marca->delete();
            return 'Excludio';

        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
