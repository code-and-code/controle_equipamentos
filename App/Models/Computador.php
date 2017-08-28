<?php
namespace App\Models;

use App\Support\PatrimonioTrait;

class Computador extends Model {


    use PatrimonioTrait;

    protected $table      = "computadores";

    public    $requested    = ['equipamento_id','memoria', 'placa', 'hd', 'processador', 'placa_video', 'data_compra'];

    public function Licencas()
    {
        return $this->hasMany(Serial::class);
    }

    public function Equipamento()
    {
        return $this->hasOne(Equipamento::class);
    }

    public function Patrimonio()
    {
        return $this->hasOne(Patrimonio::class);
    }
}