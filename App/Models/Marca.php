<?php
namespace App\Models;



class Marca extends Model {

    protected $table      = "marcas";
    public    $requested  = ['nome'];

    public function Equipamentos()
    {
        return $this->hasMany(Equipamento::class);
    }
}