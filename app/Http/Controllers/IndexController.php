<?php

namespace App\Http\Controllers;

use App\Entities\Estado;
use App\Entities\Marca;
use App\Entities\Modelo;
use App\Entities\Tipo;
use App\Entities\Configuracao;
use App\Http\Traits\Pagination;
use App\Repositories\Eloquent\Modules\DepoimentoRepository;
use FernandoWobeto\UolMotor1Rss\Rss;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Filters\VeiculosFilter;
use Illuminate\Support\Facades\URL;
use App\Repositories\Eloquent\Modules\VeiculoRepository;
use App\Repositories\Eloquent\Modules\EstatisticaRepository;

class IndexController extends Controller
{

    use Pagination;

    private $veiculoRepository;
    private $estatisticaRepository;
    private $depoimentoRepository;

    public function __construct()
    {
        $this->veiculoRepository     = new VeiculoRepository();
        $this->estatisticaRepository = new EstatisticaRepository();
        $this->depoimentoRepository  = new DepoimentoRepository();
    }

    public function home()
    {
        $data = $this->getGerais();

        $data['configuracao']     = Configuracao::first();
        $data['depoimentos']      = $this->depoimentoRepository->allActive();
        $data['ultimos_veiculos'] = $this->veiculoRepository->getUltimosVeiculos();
        $data['ultimas_noticias'] = (new Collection((new Rss())->get()))->slice(0, 6);
        $data['estatisticas']     = $this->estatisticaRepository->all();

        return view('home', $data);
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

        $data['veiculos'] = $this->paginate($filter->apply(), 12, null, [
            'path' => route('veiculos')
        ])->appends($request->except(['page', 'q']));

        $data['ultimos_veiculos'] = $this->veiculoRepository->getUltimosVeiculos();
        $data['url_order']        = route('veiculos', $request->except(['order', 'q']));

        return view('veiculos', $data);
    }

    public function about()
    {
        $configuracao = Configuracao::first();

        return view('about', compact('configuracao'));
    }

    public function detail($id)
    {
        $repo = new VeiculoRepository();

        $veiculo = $repo->getDetalhesVeiculo($id);

        return view('detail')->with('veiculo', $veiculo);
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
