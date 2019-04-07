<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Marca;
use Illuminate\Database\Eloquent\Builder;

class MarcasFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Marca::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}