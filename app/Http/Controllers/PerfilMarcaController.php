<?php

namespace App\Http\Controllers;

use App\Entities\Marca;
use App\Http\Requests\PerfilMarcaSaveRequest;
use Illuminate\Http\Request;

class PerfilMarcaController extends Controller
{

   public function index ()
   {
      $marcas = Marca::all();

      return view('perfil.marcas.index', compact('marcas'));
   }

   public function form ($id = null)
   {
      $marca = null;
      $action = route('perfil.marca.create');

      if($id){
         $marca = Marca::find($id);
         $action = route('perfil.marca.update', ['id' => $id]);
      }

      return view('perfil.marcas.form', compact('marca', 'action'));
   }

   public function create (PerfilMarcaSaveRequest $request)
   {
      $marca = new Marca();
      $marca->name = $request->get('name');
      $marca->save();

      return redirect()->route('perfil.marcas');
   }

   public function update ($id, PerfilMarcaSaveRequest $request)
   {
      $marca = Marca::find($id);
      $marca->name = $request->get('name');
      $marca->save();

      return redirect()->route('perfil.marcas');
   }

}
