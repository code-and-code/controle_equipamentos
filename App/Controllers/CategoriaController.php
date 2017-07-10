<?php
namespace App\Controllers;

use App\Models\Categoria;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class CategoriaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Categoria();
    }

}
