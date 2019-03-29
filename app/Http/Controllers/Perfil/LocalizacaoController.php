<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Localizacao;
use Illuminate\Http\Request;
use App\Http\Requests\PerfilLocalizacaoSaveRequest;
use App\Http\Controllers\Controller;

class LocalizacaoController extends Controller
{

   public function index ()
   {
      $localizacoes = Localizacao::all();

      return view('perfil.localizacoes.index', compact('localizacoes'));
   }

   public function form ($id = null)
   {
      $localizacao = null;
      $action = route('perfil.localizacao.create');

      if($id){
         $localizacao = Localizacao::find($id);
         $action = route('perfil.localizacao.update', ['id' => $id]);
      }

      $ufs = get_ufs();

      return view('perfil.localizacoes.form', compact('localizacao', 'action', 'ufs'));
   }

   public function create (PerfilLocalizacaoSaveRequest $request)
   {
      $localizacao = new Localizacao();
      $localizacao->name = $request->get('name');
      $localizacao->uf = $request->get('uf');
      $localizacao->save();

      return redirect()->route('perfil.localizacoes');
   }

   public function update ($id, PerfilLocalizacaoSaveRequest $request)
   {
      $localizacao = Localizacao::find($id);
      $localizacao->name = $request->get('name');
      $localizacao->uf = $request->get('uf');
      $localizacao->save();

      return redirect()->route('perfil.localizacoes');
   }

}
