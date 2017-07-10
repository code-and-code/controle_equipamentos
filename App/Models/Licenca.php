<?php
namespace App\Models;

use Cac\Model\Model;

class Licenca extends Model {

    protected $table      = "licencas";
    public    $requested  = ['nome'];

    public function Serial()
    {
        return $this->hasMany(Serial::class);
    }
}