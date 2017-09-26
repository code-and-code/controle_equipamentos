<?php
namespace App\Models;


class Entrada extends Model {

    protected $table      = "entradas";
    public    $requested  = ['qtd', 'equipamento_id'];

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Nfe()
    {
        return $this->hasOne(Nfe::class, 'nfe_id');
    }
}