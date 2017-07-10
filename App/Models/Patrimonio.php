<?php
namespace App\Models;

use Cac\Model\Model;

class Patrimonio extends Model {

    protected $table      = "patrimonios";
    public    $requested    = ['equipamento_id', 'tela', 'nfe', 'valor', 'data_compra'];

    public function Local()
    {
        return $this->belongsTo(Local::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }
}