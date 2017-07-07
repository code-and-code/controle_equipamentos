<?php
namespace App\Models;

use Cac\Model\Model;

class Funcionario extends Model {

    protected $table      = "funcionarios";

    public function Setor()
    {
        return $this->belongsTo(Setor::class);
    }

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }

}