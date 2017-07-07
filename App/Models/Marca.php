<?php
namespace App\Models;

use Cac\Model\Model;

class Marca extends Model {

    protected $table      = "marcas";

    public function Equipamentos()
    {
        return $this->hasMany(Equipamento::class);
    }
}