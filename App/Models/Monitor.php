<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Monitor extends Model {

    use PatrimonioTrait;

    protected $table      = "monitores";
    public    $requested    = ['equipamento_id', 'tela', 'nfe', 'valor', 'data_compra'];

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Patrimonio()
    {
        return $this->hasOne(Patrimonio::class);
    }
}