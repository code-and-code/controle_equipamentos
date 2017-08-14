<?php
namespace App\Models;



class Licenca extends Model {

    protected $table      = "licencas";
    public    $requested  = ['nome'];

    public function Serial()
    {
        return $this->hasMany(Serial::class);
    }
}