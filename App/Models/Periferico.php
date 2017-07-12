<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Periferico extends Model {

    use PatrimonioTrait;

    protected $table      = "perifericos";
    public    $requested    = ['equipamento_id', 'descricao', 'nfe', 'valor', 'data_compra'];

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Patrimonio()
    {
        return $this->hasOne(Patrimonio::class);
    }
}