<?php
namespace App\Models;


class Serial extends Model {

    protected $table      = "serial";
    public    $requested  = ['numero'];

    public function Computador()
    {
        return $this->hasOne(Computador::class);
    }

    public function Licenca()
    {
        return $this->hasOne(Licenca::class);
    }
}