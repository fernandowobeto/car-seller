<?php

namespace App\Http\Filters\Perfil;

use App\Http\Filters\FiltersAbstract;
use App\Repositories\Eloquent\Modules\Perfil\PropostaRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class PropostasFilter extends FiltersAbstract
{

    protected $propostaRepository;

    protected function boot()
    {
        $this->propostaRepository = new PropostaRepository();
    }

    public function apply(): Collection
    {
        $request = $this->request;

        return $this->propostaRepository->getPropostas(Auth::getUser()->id, function ($db) use ($request) {
            if ($request->has('placa')) {
                if (is_valid_int($request->input('placa'))) {
                    $db->where('v.id', '=', $request->input('placa'));
                } else if (is_valid_placa_veiculo($request->input('placa'))) {
                    $db->where('v.placa', '=', $request->input('placa'));
                } else {
                    $db->where('v.id', '=', 0);
                }
            }
        });
    }

}