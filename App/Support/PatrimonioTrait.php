<?php

namespace App\Support;

use App\Models\Equipamento;
use App\Models\Patrimonio;

trait PatrimonioTrait
{
    public function Equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }

    public function Patrimonio()
    {
        return $this->belongsTo(Patrimonio::class);
    }
}