<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Marca;
use App\Entities\Modelo;
use App\Entities\Cor;
use App\Entities\Cambio;
use App\Entities\Combustivel;
use App\Entities\Tipo;
use App\Entities\Opcional;
use App\Entities\Adicional;
use App\Http\Requests\PerfilCambioSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VeiculoController extends Controller
{

    public function index()
    {
        return view('perfil.veiculos.index');
    }

    public function form()
    {
        $marcas       = Marca::all();
        $cores        = Cor::all();
        $cambios      = Cambio::all();
        $combustiveis = Combustivel::all();
        $tipos        = Tipo::all();
        $opcionais    = Opcional::all();
        $adicionais   = Adicional::all();
        $anos         = range((date('Y') + 1), 1900);
        $portas       = range(1, 5);

        return view('perfil.veiculos.form', compact(
            'marcas',
            'cores',
            'cambios',
            'combustiveis',
            'tipos',
            'opcionais',
            'adicionais',
            'anos',
            'portas'
        ));
    }

    public function getModelos()
    {

    }

}
