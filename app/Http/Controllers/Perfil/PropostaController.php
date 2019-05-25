<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Filters\Perfil\PropostasFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropostaController extends Controller
{

    public function index(Request $request)
    {
        $filter = new PropostasFilter($request);

        $propostas = $filter->apply();

        return view('perfil.propostas.index', compact('propostas'));
    }

    public function detail ()
    {

    }

    public function remove ()
    {

    }

}
