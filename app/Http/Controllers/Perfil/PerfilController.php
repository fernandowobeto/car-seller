<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Estado;
use App\Entities\User;
use App\Http\Requests\PerfilUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{

    public function index()
    {
        $user = User::find(Auth::user()->id);

        $estados = Estado::all();
        $cidades = [];

        if ($user->cidade) {
            $cidades = $user->cidade->estado->cidades;
        }

        return view('perfil.index', compact(
            'user',
            'estados',
            'cidades'
        ));
    }

    public function update(PerfilUpdateRequest $request)
    {
        $user = Auth::user();

        $user->name      = $request->get('name');
        $user->cidade_id = $request->get('cidade_id');
        $user->save();

        return redirect()->route('perfil.perfil');
    }

    public function getCidades(Request $request)
    {
        $cidades = Estado::find($request->id)->cidades;

        $options = '';

        foreach ($cidades as $cidade) {
            $options .= sprintf('<option value="%d">%s</option>', $cidade->id, $cidade->name);
        }

        return $options;
    }

    public function mensagens()
    {
        return view('perfil.mensagens.index');
    }

}
