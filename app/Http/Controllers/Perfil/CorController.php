<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Cor;
use App\Http\Filters\Perfil\CoresFilter;
use App\Http\Requests\PerfilCorSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CorController extends Controller
{

    public function index(Request $request)
    {
        $filter = new CoresFilter($request);

        $cores = $filter->apply()->paginate(15)->appends($request->only(['name']));

        return view('perfil.cores.index', compact('cores'));
    }

    public function form($id = null)
    {
        $cor    = [];
        $action = route('perfil.cor.create');

        if ($id) {
            $cor    = Cor::find($id)->getOriginal();
            $action = route('perfil.cor.update', ['id' => $id]);
        }

        return view('perfil.cores.form', $cor)->with('action', $action);
    }

    public function create(PerfilCorSaveRequest $request)
    {
        $cor       = new Cor();
        $cor->name = $request->get('name');
        $cor->save();

        return redirect()->route('perfil.cores');
    }

    public function update($id, PerfilCorSaveRequest $request)
    {
        $cor       = Cor::find($id);
        $cor->name = $request->get('name');
        $cor->save();

        return redirect()->route('perfil.cores');
    }

}
