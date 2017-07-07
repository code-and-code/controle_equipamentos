<?php
namespace App\Controllers;

use App\Models\Licenca;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;

class LicencaController extends Action
{
    public $model;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model = new Licenca();
    }
}
