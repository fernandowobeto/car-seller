<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Depoimento;
use App\Http\Requests\PerfilDepoimentoSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepoimentoController extends Controller
{

    public function index(Request $request)
    {
        $depoimentos = Depoimento::paginate(15);

        return view('perfil.depoimentos.index', compact('depoimentos'));
    }

    public function form($id = null)
    {
        $depoimento = null;
        $action     = route('perfil.depoimento.create');

        if ($id) {
            $depoimento = Depoimento::find($id);
            $action    = route('perfil.depoimento.update', ['id' => $id]);
        }

        return view('perfil.depoimentos.form', compact('depoimento', 'action'));
    }

    public function create(PerfilDepoimentoSaveRequest $request)
    {
        $depoimento       = new Depoimento();
        $depoimento->name = $request->get('name');
        $depoimento->testimonial = $request->get('testimonial');
        $depoimento->save();

        return redirect()->route('perfil.depoimentos');
    }

    public function update($id, PerfilDepoimentoSaveRequest $request)
    {
        $depoimento       = Depoimento::find($id);
        $depoimento->name = $request->get('name');
        $depoimento->save();

        return redirect()->route('perfil.depoimentos');
    }

}
