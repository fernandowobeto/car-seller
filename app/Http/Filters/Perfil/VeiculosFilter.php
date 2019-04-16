<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Repositories\Eloquent\Modules\PerfilVeiculoRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class VeiculosFilter extends FiltersAbstract
{

    protected $veiculoRepository;

    public function apply(): Collection
    {
        $request = $this->request;

        return $this->veiculoRepository->getVeiculos(Auth::getUser()->id, function ($db) use ($request) {
            if ($request->has('placa')) {
                $b->where('placa', '=', $request->input('name'));
            }
        });
    }

    protected function boot()
    {
        $this->veiculoRepository = new PerfilVeiculoRepository();
    }

}