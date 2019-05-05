<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Builder;
use Illuminate\Support\Facades\Storage;

class VeiculoRepository
{

    public function getVeiculos(callable $filters): Collection
    {
        $resource = $this->getQueryVeiculos();

        if ($filters) {
            $filters($resource);
        }

        $resource->orderBy('v.ano_modelo', 'desc');

        return $this->get($resource);
    }

    public function getUltimosVeiculos()
    {
        $resource = $this->getQueryVeiculos();

        $resource->orderBy('v.id', 'desc');
        $resource->limit(6);

        return $this->get($resource);
    }

    private function get($resource)
    {
        return $resource->get()->each(function ($veiculo) {
            $veiculo->first_image = null;

            if (Storage::disk('cars')->exists($veiculo->id)) {
                $files = Storage::disk('cars')->files($veiculo->id);

                if ($files) {
                    $explode = explode('/', reset($files));

                    $veiculo->first_image = end($explode);
                }
            }
        });
    }

    private function getQueryVeiculos()
    {
        $resource = DB::table('veiculos as v')
            ->select(
                'v.*',
                't.name AS tipo_name',
                'mo.name AS modelo_name',
                'm.name AS marca_name',
                'c.name AS cor_name',
                'cb.name AS combustivel_name',
                'ci.name AS cidade_name',
                'e.uf'
            )
            ->join('modelos as mo', 'mo.id', '=', 'v.modelo_id')
            ->join('marcas as m', 'm.id', '=', 'mo.marca_id')
            ->join('tipos as t', 't.id', '=', 'v.tipo_id')
            ->join('cores as c', 'c.id', '=', 'v.cor_id')
            ->join('combustiveis as cb', 'cb.id', '=', 'v.combustivel_id')
            ->join('users as u', 'u.id', '=', 'v.user_id')
            ->join('cidades as ci', 'ci.id', '=', 'u.cidade_id', 'left')
            ->join('estados as e', 'e.id', '=', 'ci.estado_id', 'left')
            ->whereRaw("((v.data_aprovado + integer '30') > ?)", [date('Y-m-d')])
            ->where('v.finalizado', false);

        return $resource;
    }

}