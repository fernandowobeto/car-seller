<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Modelo;
use Illuminate\Database\Eloquent\Builder;

class ModelosFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Modelo::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}