<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Repositories\Contracts\Modules\PerfilModeloInterface;

class PerfilModeloRepository implements PerfilModeloInterface
{

    public function getModelos(string $order = 'id'): Collection
    {
        return DB::table('modelos as mo')
            ->select('mo.*', 'ma.name AS marca_name')
            ->join('marcas as ma', 'ma.id', '=', 'mo.marca_id')
            ->orderBy($order)
            ->get();
    }

}