<?php

namespace App\Repositories\Eloquent\Modules;

use App\Entities\Depoimento;

class DepoimentoRepository
{

    public function allActive()
    {
        return Depoimento::where('ativo', true)->get();
    }

}