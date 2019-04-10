<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Opcional;
use Illuminate\Database\Eloquent\Builder;

class OpcionaisFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Opcional::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}