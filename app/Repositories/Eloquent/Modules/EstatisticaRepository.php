<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Builder;
use Illuminate\Support\Facades\Storage;
use App\Entities\Veiculo

class EstatisticaRepository
{

    public function all ()
    {

    }

    public function getTotalNewVehicles ()
    {
        return Veiculo::where('finalizado', false)
            where('')->total();
    }

}