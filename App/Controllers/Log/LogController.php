<?php
namespace App\Controllers\Log;

use Cac\Controller\Action;
use Cac\Support\Cache;

class LogController extends Action
{
    public function error()
    {
        $code = $_GET['code'];
        $logs = Cache::get('log_app');

        foreach($logs as $log)
        {
            $codes[] =(objectToArray($log));
        }

        echo print_r($codes[][]);
    }
}