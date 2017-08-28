<?php
namespace App\Models;


class Nfe extends Model {

    protected $table      = "nfes";
    public    $requested  = ['nfe'];

    public function Custo()
    {
        return $this->hasOne(Custo::class, 'centro_custo_id');
    }

}