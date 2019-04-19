<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Repositories\Contracts\Modules\PerfilVeiculoInterface;
use PhpParser\Builder;

class PerfilVeiculoRepository implements PerfilVeiculoInterface
{

    public function getVeiculos(int $user_id, callable $filters): Collection
    {
        $resource = DB::table('veiculos as v')
            ->select(
                'v.*',
                'mo.name AS modelo_name',
                'm.name AS marca_name',
                'c.name AS cor_name'
            )
            ->selectRaw("(v.data_aprovado + integer '30') as expires")
            ->selectRaw("((v.data_aprovado + integer '30') < ?) as expired", [date('Y-m-d')])
            ->join('modelos as mo', 'mo.id', '=', 'v.modelo_id')
            ->join('marcas as m', 'm.id', '=', 'mo.marca_id')
            ->join('cores as c', 'c.id', '=', 'v.cor_id')
            ->orderBy('v.id');

        $resource->where('v.user_id', $user_id);

        $filters($resource);

        return $resource->get();
    }

}