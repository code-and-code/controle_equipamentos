<?php
namespace App\Models;



class Equipamento extends Model {

    protected $table      = "equipamentos";
    public    $requested  = ['nome','model','marca_id','categoria_id'];

    public function Marca()
    {
        return $this->hasOne(Marca::class);
    }

    public function Categoria()
    {
        return $this->hasOne(Categoria::class);
    }

    public function Estoque()
    {
        return $this->where('qtd','>' ,0 )->get();
    }
}