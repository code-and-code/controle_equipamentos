<?php
namespace App\Models;

use Cac\Model\Model;

class Funcionario extends Model {

    protected $table        = "funcionarios";
    public    $requested    = ['setor_id','nome','email'];

    public function Setor()
    {
        return $this->belongsTo(Setor::class);
    }

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }

}