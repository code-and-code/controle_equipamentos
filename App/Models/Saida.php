<?php
namespace App\Models;


class Saida extends Model {

    protected $table      = "saidas";
    public    $requested  = ['qtd','setor_id','equipamento_id'];


    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Setor()
    {
        return $this->hasOne(Setor::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }
}