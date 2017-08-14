<?php
namespace App\Models;



class Funcionario extends Model {

    protected $table        = "funcionarios";
    public    $requested    = ['setor_id','nome','email'];

    public function Setor()
    {
        return $this->hasOne(Setor::class);
    }

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }

}