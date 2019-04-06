<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Entities\Cidade;
use Illuminate\Database\Eloquent\Builder;

class CidadesFilter extends FiltersAbstract
{

    public function apply(): Builder
    {
        return Cidade::when($this->request->has('name'), function ($query) {
            $query->where('name', 'ilike', '%' . $this->request->input('name') . '%');
        });
    }

}