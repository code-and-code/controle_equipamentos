<?php
namespace App\Models;

use Cac\Model\Model;

class Local extends Model {

    protected $table      = "locais";
    public    $requested  = ['nome'];

    public function Patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }

}