<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Tipo;
use App\Http\Requests\PerfilTipoSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoController extends Controller
{

    public function index()
    {
        $tipos = Tipo::all();

        return view('perfil.tipos.index', compact('tipos'));
    }

    public function form($id = null)
    {
        $tipo   = null;
        $action = route('perfil.tipo.create');

        if ($id) {
            $tipo   = Tipo::find($id);
            $action = route('perfil.tipo.update', ['id' => $id]);
        }

        return view('perfil.tipos.form', compact('tipo', 'action'));
    }

    public function create(PerfilTipoSaveRequest $request)
    {
        $tipo       = new Tipo();
        $tipo->name = $request->get('name');
        $tipo->save();

        return redirect()->route('perfil.tipos');
    }

    public function update($id, PerfilTipoSaveRequest $request)
    {
        $tipo       = Tipo::find($id);
        $tipo->name = $request->get('name');
        $tipo->save();

        return redirect()->route('perfil.tipos');
    }

}
