<?php
namespace App\Models;

use Cac\Model\Model;

class Patrimonio extends Model {

    protected $table      = "patrimonios";

    public function Local()
    {
        return $this->belongsTo(Local::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }
}