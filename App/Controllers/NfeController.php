<?php
namespace App\Controllers;

use App\Models\Custo;
use App\Models\Nfe;
use App\Support\CrudControllerTrait;
use Cac\Controller\Action;
use Cac\Support\File;

class NfeController extends Action
{
    public $model;
    private $path;

    use CrudControllerTrait;

    public function __construct()
    {
        $this->model     = new Nfe();
        $this->path    = config('app.file.folder');
    }

    public function create()
    {
        $custo       = new Custo();
        echo $this->render("nfe.create", ['custos' => $custo->all()]);
    }

    public function delete()
    {
        try{
            $nfe = $this->model->find($_GET['id']);

            if($nfe->file != null)
            {
                unlink("{$this->path}/$nfe->file");
            }
            $nfe->delete();
            back('Excluido');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }


    public function sendNf()
    {
        $f = $this->model->find($_GET['id']);



        echo $this->render('nfe.upload',['nfe' => $this->model->find($_GET['id'])]);
    }

    public function uploadNf()
    {
        try{

            $nfe = $this->model->find($_POST['id']);

            if($nfe->file != null)
            {
                unlink("{$this->path}/$nfe->file");
            }

            $file       = new File($_FILES['file'],$this->path);

            $nameFile   = md5(date('H:m:s:'));

            $file->setName($nameFile)
                ->mimeType(['application/pdf'])
                ->maxSize('1MB')
                ->upload();

            $nfe->file = "{$nameFile}.{$file->getData()->extension}";

            $nfe->save();
            back('Enviado');

        }catch (\Exception $e)
        {
            $this->fail($e);
        }
    }

    public function deleteNf()
    {
        try{
            $nfe = $this->model->find($_GET['id']);
            unlink("{$this->path}/$nfe->file");

            $nfe->file = NULL;
            $nfe->save();

            back('Excluido');

        }catch (\Exception $e)
        {
            back($e->getMessage(),'warning');
        }
    }

    public function downloadNf()
    {
        $nfe = $this->model->find($_GET['id']);
        $nf_file = "{$this->path}/$nfe->file";

        if (!file_exists($nf_file)) {
            back('Nota fical não existe :(','warning');
        }

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.$nfe->file.'"');
        header('Content-Type: application/octet-stream');
        header('Content-Length: ' . filesize($nf_file));

        // Envia o arquivo para o cliente
        readfile($nf_file);
    }


}
