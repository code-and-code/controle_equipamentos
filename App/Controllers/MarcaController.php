<?php
namespace App\Controllers;

use App\Models\Marca;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class MarcaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Marca();
    }
}
