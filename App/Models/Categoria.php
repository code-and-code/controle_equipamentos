<?php
namespace App\Models;


class Categoria extends Model {

    protected $table      = "categorias";
    public    $requested  = ['nome'];
}