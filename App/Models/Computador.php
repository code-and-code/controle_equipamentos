<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Computador extends Model {


    use PatrimonioTrait;

    protected $table      = "computadores";

    public function Licencas()
    {
        return $this->hasMany(Licenca::class);
    }
}