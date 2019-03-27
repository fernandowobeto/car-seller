<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Combustivel;
use App\Http\Requests\PerfilCombustivelSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CombustivelController extends Controller
{

   public function index ()
   {
      $combustiveis = Combustivel::all();

      return view('perfil.combustiveis.index', compact('combustiveis'));
   }

   public function form ($id = null)
   {
      $combustivel = null;
      $action = route('perfil.combustivel.create');

      if($id){
         $combustivel = Combustivel::find($id);
         $action =route('perfil.combustivel.update', ['id' => $id]);
      }

      return view('perfil.combustiveis.form', compact('combustivel', 'action'));
   }

   public function create (PerfilCombustivelSaveRequest $request)
   {
      $combustivel = new Combustivel();
      $combustivel->name = $request->get('name');
      $combustivel->save();

      return redirect()->route('perfil.combustiveis');
   }

   public function update ($id, PerfilCombustivelSaveRequest $request)
   {
      $combustivel = Combustivel::find($id);
      $combustivel->name = $request->get('name');
      $combustivel->save();

      return redirect()->route('perfil.combustiveis');
   }

}
