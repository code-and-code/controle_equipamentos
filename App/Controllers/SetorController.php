<?php
namespace App\Controllers;

use App\Models\Setor;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class SetorController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Setor();
    }

}
