<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Cor;
use App\Http\Requests\PerfilCorSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CorController extends Controller
{

   public function index()
   {
      $cores = Cor::all();

      return view('perfil.cores.index', compact('cores'));
   }

   public function form($id = null)
   {
      $cor    = null;
      $action = route('perfil.cor.create');

      if ($id) {
         $cor    = Cor::find($id);
         $action = route('perfil.cor.update', ['id' => $id]);
      }

      return view('perfil.cores.form', compact('cor', 'action'));
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
