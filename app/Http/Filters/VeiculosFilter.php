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
        }, $this->getOrder(), $this->getDirection());
    }

    protected function boot()
    {
        $this->veiculoRepository = new VeiculoRepository();
    }

    private function getOrder()
    {
        $order = 'v.id';

        switch ($this->request->input('order')) {
            case 'expensive':
                $order = 'v.valor';
                break;
            case 'cheaper':
                $order = 'v.valor';
                break;
            case 'newer':
                $order = 'v.ano_fabricacao';
                break;
        }

        return $order;
    }

    private function getDirection()
    {
        $direction = 'asc';

        switch ($this->request->input('order')) {
            case 'expensive':
                $direction = 'desc';
                break;
            case 'newer':
                $direction = 'desc';
                break;
        }

        return $direction;
    }

}