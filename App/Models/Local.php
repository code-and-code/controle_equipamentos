<?php
namespace App\Models;



class Local extends Model {

    protected $table      = "locais";
    public    $requested  = ['nome'];

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }

}