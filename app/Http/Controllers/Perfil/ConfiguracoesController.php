<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Configuracao;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\PerfilConfiguracaoSaveRequest;

class ConfiguracoesController extends Controller
{

    public function form()
    {
        $configuracao = Configuracao::first();

        return view('perfil.configuracoes.form', compact('configuracao'));
    }

    public function save(PerfilConfiguracaoSaveRequest $request)
    {
        $configuracao = Configuracao::first();

        if (!$configuracao) {
            $configuracao = new Configuracao();
        }

        $configuracao->bem_vindo       = $request->get('bem_vindo');
        $configuracao->sobre           = $request->get('sobre');
        $configuracao->servicos        = $request->get('servicos');
        $configuracao->depoimentos     = $request->get('depoimentos');
        $configuracao->noticias        = $request->get('noticias');
        $configuracao->quem_somos      = $request->get('quem_somos');
        $configuracao->nossa_missao    = $request->get('nossa_missao');
        $configuracao->porque_escolher = $request->get('porque_escolher');
        $configuracao->dias_anuncios   = $request->get('dias_anuncios');
        $configuracao->save();

        return redirect()->route('perfil.configuracoes');
    }

}
