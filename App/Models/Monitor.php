<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Monitor extends Model {

    use PatrimonioTrait;

    protected $table      = "monitor";
}