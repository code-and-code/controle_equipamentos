<?php
namespace App\Controllers\Log;

use Cac\Controller\Action;
use Cac\Support\Log;

class LogController extends Action
{
    public function index()
    {
        $log = Log::getFile();
        $ponteiro = fopen($log, "r");

        while (!feof($ponteiro)) {

            $linha = fgets($ponteiro, 4096);
            echo $linha . "<br>";
        }
        fclose($ponteiro);
    }
}