<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Cidade;
use App\Entities\Estado;
use App\Http\Requests\PerfilCidadeSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CidadeController extends Controller
{

    public function index()
    {
        $cidades = Cidade::paginate(15);

        return view('perfil.cidades.index', compact('cidades'));
    }

    public function form($id = null)
    {
        $estados = Estado::all();

        return view('perfil.cidades.form', compact('estados'));
    }

    public function create(PerfilCidadeSaveRequest $request)
    {
        $cidade            = new Cidade();
        $cidade->name      = $request->get('name');
        $cidade->estado_id = $request->get('estado_id');
        $cidade->save();

        return redirect()->route('perfil.cidades');
    }

}
