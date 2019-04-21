<?php

namespace App\Http\Controllers;

use App\Entities\Estado;
use App\Entities\Marca;
use App\Entities\Modelo;
use App\Entities\Tipo;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function home()
    {
        $estados = Estado::orderBy('name')->get();
        $marcas  = Marca::orderBy('name')->get();
        $anos    = range((date('Y') + 1), 1900);
        $tipos   = Tipo::all();

        return view('index', compact(
            'estados',
            'marcas',
            'anos',
            'tipos'
        ));
    }

    public function getModelos($id)
    {
        $modelos = Modelo::where([
            'marca_id' => $id
        ])->orderBy('name')->get();

        return implode('', array_map(function ($modelo) {
            return sprintf('<option value="%s">%s</option>', $modelo['name'], $modelo['name']);
        }, $modelos->toArray()));
    }

    public function veiculos()
    {
        return view('veiculos');
    }

}
