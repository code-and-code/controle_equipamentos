<?php
namespace App\Models;

use Cac\Model\Model;

class Licenca extends Model {

    protected $table      = "licencas";

    public function Computador()
    {
        return $this->belongsTo(Computador::class);
    }
}