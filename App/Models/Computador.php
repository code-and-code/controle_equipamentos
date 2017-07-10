<?php
namespace App\Models;

use App\Support\PatrimonioTrait;
use Cac\Model\Model;

class Computador extends Model {


    use PatrimonioTrait;

    protected $table      = "computadores";

    public    $requested    = ['equipamento_id','memoria', 'placa', 'hd', 'processador', 'placa_video', 'nfe', 'data_compra'];

    public function Licencas()
    {
        return $this->hasMany(Licenca::class);
    }
}