<?php
namespace App\Controllers;

use App\Models\Custo;
use App\Models\Entrada;
use App\Models\Equipamento;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;
use Cac\Support\File;

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
        echo $this->render("entrada.create", ['equipamentos' => $equipamento->all(),'custos' => $custo->all()]);
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


    public function sendNf()
    {
        echo $this->render('entrada.upload',['entrada' => $this->model->find($_GET['id'])]);
    }

    public function uploadNf()
    {
        try{

            $entrada = $this->model->find($_POST['id']);

            if($entrada->file != null)
            {
                unlink("{$this->path}/$entrada->file");
            }

            $file       = new File($_FILES['file'],$this->path);

            $nameFile   = md5(date('H:m:s:'));

            $file->setName($nameFile)
                ->mimeType(['application/pdf'])
                ->maxSize('1MB')
                ->upload();

            $entrada->file = "{$nameFile}.{$file->getData()->extension}";

            $entrada->save();
            back('Enviado');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function deleteNf()
    {
        try{
            $entrada = $this->model->find($_GET['id']);
            unlink("{$this->path}/$entrada->file");

            $entrada->file = NULL;
            $entrada->save();

            back('Excluido');

        }catch (\Exception $e)
        {
            back($e->getMessage(),'warning');
        }
    }

    public function downloadNf()
    {
        $entrada = $this->model->find($_GET['id']);
        $nf_file = "{$this->path}/$entrada->file";

        if (!file_exists($nf_file)) {
            back('Nota fical não existe :(','warning');
        }

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.$entrada->file.'"');
        header('Content-Type: application/octet-stream');
        header('Content-Length: ' . filesize($nf_file));

        // Envia o arquivo para o cliente
        readfile($nf_file);
    }


}
