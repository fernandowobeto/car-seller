<?php

namespace App\Repositories\Eloquent\Modules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use PhpParser\Builder;
use Illuminate\Support\Facades\Storage;
use App\Entities\Veiculo;
use App\Entities\Configuracao;

class EstatisticaRepository
{

    private $configuracoes;

    public function __construct()
    {
        $this->configuracoes = Configuracao::first();
    }

    public function all()
    {
        return (object)[
            'new_vehicles'  => $this->getTotalNewVehicles(),
            'used_vehicles' => $this->getTotalUsedVehicles(),
            'sold_vehicles' => $this->getTotalSoldVehicles()
        ];
    }

    public function getTotalNewVehicles()
    {
        if (!$this->hasNewTypeVehicleConfig()) {
            return 0;
        }

        return Veiculo::where('finalizado', false)
            ->where('tipo_id', $this->configuracoes->id_tipo_novo_veiculo)
            ->count();
    }

    public function getTotalUsedVehicles()
    {
        if (!$this->hasNewTypeVehicleConfig()) {
            return 0;
        }

        return Veiculo::where('finalizado', false)
            ->where('tipo_id', '!=', $this->configuracoes->id_tipo_novo_veiculo)
            ->count();
    }

    public function getTotalSoldVehicles()
    {
        return Veiculo::where('finalizado', true)
            ->count();
    }

    private function hasNewTypeVehicleConfig()
    {
        return $this->configuracoes &&
            $this->configuracoes->id_tipo_novo_veiculo;
    }

}