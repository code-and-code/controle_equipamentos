<?php
namespace App\Models;

use Cac\Model\Model;

class Equipamento extends Model {

    protected $table      = "equipamentos";

    public function Marca()
    {
        return $this->hasOne(Marca::class);
    }

    public function Categoria()
    {
        return $this->hasOne(Categoria::class);
    }
}