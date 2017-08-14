<?php
namespace App\Models;


class Saida extends Model {

    protected $table      = "entradas";
    public    $requested  = ['qtd','setor_id'];

    public function Setor()
    {
        return $this->Setor(Equipamento::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }
}