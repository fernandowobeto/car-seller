<?php

namespace App\Http\Controllers;

use App\Entities\Estado;
use App\Entities\Marca;
use App\Entities\Modelo;
use App\Entities\Tipo;
use App\Http\Traits\Pagination;
use Illuminate\Http\Request;
use App\Http\Filters\VeiculosFilter;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller
{

    use Pagination;

    public function home()
    {
        return view('home', $this->getGerais());
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

    public function veiculos(Request $request)
    {
        $filter = new VeiculosFilter($request);

        $data = $this->getGerais();

        $data['veiculos'] = $this->paginate($filter->apply(), 15, null, [
            'path' => URL::full()
        ]);

        return view('veiculos', $data);
    }

    private function getGerais()
    {
        $estados = Estado::orderBy('name')->get();
        $marcas  = Marca::orderBy('name')->get();
        $anos    = range((date('Y') + 1), 1900);
        $tipos   = Tipo::all();

        return compact(
            'estados',
            'marcas',
            'anos',
            'tipos'
        );
    }

}
