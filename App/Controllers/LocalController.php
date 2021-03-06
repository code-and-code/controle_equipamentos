<?php
namespace App\Controllers;

use App\Models\Local;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class LocalController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Local();
    }
}
