<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Adicional;
use App\Http\Filters\Perfil\AdicionaisFilter;
use App\Http\Requests\PerfilAdicionalSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdicionalController extends Controller
{

    public function index(Request $request)
    {
        $filter = new AdicionaisFilter($request);

        $adicionais = $filter->apply()->paginate(15)->appends($request->only(['name']));

        return view('perfil.adicionais.index', compact('adicionais'));
    }

    public function form($id = null)
    {
        $adicional = null;
        $action    = route('perfil.adicional.create');

        if ($id) {
            $adicional = Adicional::find($id);
            $action    = route('perfil.adicional.update', ['id' => $id]);
        }

        return view('perfil.adicionais.form', compact('adicional', 'action'));
    }

    public function create(PerfilAdicionalSaveRequest $request)
    {
        $adicional       = new Adicional();
        $adicional->name = $request->get('name');
        $adicional->save();

        return redirect()->route('perfil.adicionais');
    }

    public function update($id, PerfilAdicionalSaveRequest $request)
    {
        $adicional       = Adicional::find($id);
        $adicional->name = $request->get('name');
        $adicional->save();

        return redirect()->route('perfil.adicionais');
    }

}
