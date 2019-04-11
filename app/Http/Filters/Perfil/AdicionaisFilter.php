<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Adicional;
use Illuminate\Database\Eloquent\Builder;

class AdicionaisFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Adicional::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}