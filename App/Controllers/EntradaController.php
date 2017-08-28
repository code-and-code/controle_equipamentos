<?php
namespace App\Controllers;

use App\Models\Custo;
use App\Models\Entrada;
use App\Models\Equipamento;
use App\Models\Nfe;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;
use Cac\Support\File;
use Cac\Support\Validation;

class EntradaController extends Action
{
    public $model;
    private $path;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model   = new Entrada();
        $this->path    = config('app.file.folder');
    }

    public function create()
    {
        $equipamento = new Equipamento();
        $custo       = new Custo();
        $nfe         = new Nfe();
        echo $this->render("entrada.create", ['equipamentos' => $equipamento->all(),'custos' => $custo->all(), 'nfes' => $nfe->all()]);
    }

    public function delete()
    {
        try{
            $entrada = $this->model->find($_GET['id']);

            if($entrada->file != null)
            {
                unlink("{$this->path}/$entrada->file");
            }
            $entrada->delete();
            back('Excluido');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }
}
