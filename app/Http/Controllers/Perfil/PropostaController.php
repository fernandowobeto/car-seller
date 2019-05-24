<?php

namespace App\Http\Controllers\Perfil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropostaController extends Controller
{

    public function index(Request $request)
    {
//        $filter = new AdicionaisFilter($request);
//
//        $adicionais = $filter->apply()->paginate(15)->appends($request->only(['name']));
//
//        return view('perfil.adicionais.index', compact('adicionais'));
    }

    public function remove ()
    {

    }

}
