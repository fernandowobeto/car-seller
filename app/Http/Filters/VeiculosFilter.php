<?php

namespace App\Http\Filters;

use App\Http\Filters\FiltersAbstract;
use Illuminate\Support\Collection;
use App\Repositories\Eloquent\Modules\VeiculoRepository;

class VeiculosFilter extends FiltersAbstract
{

    protected $veiculoRepository;

    public function apply(): Collection
    {
        $request = $this->request;

        return $this->veiculoRepository->getVeiculos(function ($db) use ($request) {
            if ($request->has('uf')) {
                $db->where('e.uf', '=', $request->input('uf'));
            }

            if ($request->has('marca')) {
                $db->where('m.name', '=', $request->input('marca'));
            }

            if ($request->has('modelo')) {
                $db->where('mo.name', '=', $request->input('modelo'));
            }

            if ($request->has('tipo')) {
                $db->where('t.name', '=', $request->input('tipo'));
            }
        });
    }

    protected function boot()
    {
        $this->veiculoRepository = new VeiculoRepository();
    }

}