<?php
namespace App\Models;

use Cac\Model\Model;

class Patrimonio extends Model {

    protected $table      = "patrimonios";
    public    $requested    = ['num_patrimonial', 'funcionario_id', 'local_id'];

    public function Local()
    {
        return $this->hasOne(Local::class);
    }

    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }

    public  function Item()
    {
        $obj = new $this->class;
        return $obj->where('patrimonio_id', '=', $this->id)->First();

    }


}