<?php
namespace App\Models;



class Setor extends Model {

    protected $table      = "setores";
    public    $requested  = ['nome'];

   public function Funcionarios()
   {
       return $this->hasMany(Funcionario::class);
   }

}