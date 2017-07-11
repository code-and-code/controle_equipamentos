<?php
namespace App\Models;

use Cac\Model\Model;

class Patrimonio extends Model {

    protected $table      = "patrimonios";
    public    $requested    = ['num_patrimonial', 'serial', 'funcionario_id', 'local_id'];

    public function Local()
    {
        return $this->hasOne(Local::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }

}