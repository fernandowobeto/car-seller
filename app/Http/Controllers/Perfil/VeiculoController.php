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
use App\Entities\Veiculo;
use App\Entities\VeiculoOpcional;
use App\Entities\VeiculoAdicional;
use App\Http\Requests\PerfilVeiculoSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $opcionais    = Opcional::all();
        $adicionais   = Adicional::all();

        return view('perfil.veiculos.form', compact(
            'marcas',
            'cores',
            'cambios',
            'combustiveis',
            'tipos',
            'opcionais',
            'adicionais',
            'anos',
            'portas',
            'opcionais',
            'adicionais'
        ));
    }

    public function getModelos($id)
    {
        $modelos = Modelo::where([
            'marca_id' => $id
        ])->get();

        return implode('', array_map(function ($modelo) {
            return sprintf('<option value="%d">%s</option>', $modelo['id'], $modelo['name']);
        }, $modelos->toArray()));
    }

    public function create(PerfilVeiculoSaveRequest $request)
    {
        DB::beginTransaction();

        $data = $request->all();

        $data['valor']   = 38450.50;
        $data['user_id'] = Auth::user()->id;

        $veiculo = new Veiculo($data);

        $veiculo->save();

        if ($request->has('opcional')) {
            foreach ($request->opcional as $op) {
                $opcional              = new VeiculoOpcional();
                $opcional->veiculo_id  = $veiculo->id;
                $opcional->opcional_id = $op;
                $opcional->save();
            }
        }

        if ($request->has('adicional')) {
            foreach ($request->adicional as $ad) {
                $adicional               = new VeiculoAdicional();
                $adicional->veiculo_id   = $veiculo->id;
                $adicional->adicional_id = $ad;
                $adicional->save();
            }
        }

        DB::commit();

        return redirect()->route('perfil.veiculos');
    }

}
