<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Opcional;
use App\Http\Filters\Perfil\OpcionaisFilter;
use App\Http\Requests\PerfilOpcionalSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpcionalController extends Controller
{

    public function index(Request $request)
    {
        $filter = new OpcionaisFilter($request);

        $opcionais = $filter->apply()->paginate(15)->appends($request->only(['name']));

        return view('perfil.opcionais.index', compact('opcionais'));
    }

    public function form($id = null)
    {
        $opcional = null;
        $action   = route('perfil.opcional.create');

        if ($id) {
            $opcional = Opcional::find($id);
            $action   = route('perfil.opcional.update', ['id' => $id]);
        }

        return view('perfil.opcionais.form', compact('opcional', 'action'));
    }

    public function create(PerfilOpcionalSaveRequest $request)
    {
        $opcional       = new Opcional();
        $opcional->name = $request->get('name');
        $opcional->save();

        return redirect()->route('perfil.opcionais');
    }

    public function update($id, PerfilOpcionalSaveRequest $request)
    {
        $opcional       = Opcional::find($id);
        $opcional->name = $request->get('name');
        $opcional->save();

        return redirect()->route('perfil.opcionais');
    }

}
