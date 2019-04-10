<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Cor;
use Illuminate\Database\Eloquent\Builder;

class CoresFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Cor::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}