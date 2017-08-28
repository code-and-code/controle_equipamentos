<?php
namespace App\Models;



class Patrimonio extends Model {

    protected $table      = "patrimonios";
    public    $requested    = ['num_patrimonial', 'local_id', 'valor', 'data_compra'];

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

    public function Custo()
    {
        return $this->hasOne(Custo::class, 'centro_custo_id');
    }



}