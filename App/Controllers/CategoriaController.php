<?php
namespace App\Controllers;

use App\Models\Categoria;
use Cac\Controller\Action;

class CategoriaController extends Action
{
    private $model;

    public function __construct()
    {
        $this->model = new Categoria();
    }

    public function index()
    {
        echo $this->render("categoria.index", ['results' => $this->model->all()]);
    }

}
