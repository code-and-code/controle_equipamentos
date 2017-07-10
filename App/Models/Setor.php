<?php
namespace App\Models;

use Cac\Model\Model;

class Setor extends Model {

    protected $table      = "setores";
    public    $requested  = ['nome'];

   public function Funcionarios()
   {
       return $this->hasMany(Funcionario::class);
   }

}