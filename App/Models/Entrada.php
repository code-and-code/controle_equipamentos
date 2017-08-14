<?php
namespace App\Models;


class Entrada extends Model {

    protected $table      = "entradas";
    public    $requested  = ['qtd', 'nf', 'centro_custo_id', 'equipamento_id'];

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Custo()
    {
        return $this->hasOne(Custo::class, 'centro_custo_id');
    }
}