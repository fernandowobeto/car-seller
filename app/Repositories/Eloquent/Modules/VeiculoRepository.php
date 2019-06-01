<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Builder;
use Illuminate\Support\Facades\Storage;

class VeiculoRepository
{

    public function getVeiculos(callable $filters, $order = 'v.id', $direction = 'asc'): Collection
    {
        $resource = $this->getQueryVeiculos();

        if ($filters) {
            $filters($resource);
        }

        $resource->orderBy($order, $direction);

        return $this->get($resource);
    }

    public function getUltimosVeiculos()
    {
        $resource = $this->getQueryVeiculos();

        $resource->orderBy('v.id', 'desc');
        $resource->limit(6);

        return $this->get($resource);
    }

    public function getDetalhesVeiculo(int $id)
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
            ->where('v.finalizado', false)
            ->where('v.id', $id);

        $veiculo = $resource->get()->first();

        $veiculo->images = $this->getImages($veiculo->id);

        return $veiculo;
    }

    private function get($resource)
    {
        return $resource->get()->each(function ($veiculo) {
            $veiculo->first_image = null;

            $images = $this->getImages($veiculo->id);

            if ($images) {
                $veiculo->first_image = reset($images);
            }
        });
    }

    private function getImages(int $id_veiculo)
    {
        $images = [];

        if (Storage::disk('cars')->exists($id_veiculo)) {
            $files = Storage::disk('cars')->files($id_veiculo);

            if ($files) {
                $images = array_map(function ($image) {
                    $explode = explode('/', $image);

                    return end($explode);
                }, $files);
            }
        }

        return $images;
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