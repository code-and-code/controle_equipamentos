<?php
namespace App\Models;

use App\Support\PatrimonioTrait;


class Periferico extends Model {

    use PatrimonioTrait;

    protected $table      = "perifericos";
    public    $requested    = ['equipamento_id', 'nfe', 'valor', 'data_compra'];

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Patrimonio()
    {
        return $this->hasOne(Patrimonio::class);
    }
}