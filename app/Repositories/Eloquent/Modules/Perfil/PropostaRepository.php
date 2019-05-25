<?php

namespace App\Repositories\Eloquent\Modules\Perfil;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Repositories\Contracts\Modules\PerfilVeiculoInterface;

class PropostaRepository
{

    public function getPropostas(int $user_id, callable $filters): Collection
    {
        $resource = DB::table('veiculo_propostas as p')
            ->select(
                'p.*',
                'v.placa'
            )
            ->join('veiculos as v', 'v.id', '=', 'p.veiculo_id')
            ->orderBy('p.id', 'DESC');

        $resource->where('v.user_id', $user_id);
        $resource->where('v.finalizado', false);

        $filters($resource);

        return $resource->get();
    }

}