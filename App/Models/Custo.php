<?php
namespace App\Models;

use Cac\Model\Model;

class Custo extends Model {

    protected $table      = "centro_custo";
    public    $requested  = ['nome'];

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }
}