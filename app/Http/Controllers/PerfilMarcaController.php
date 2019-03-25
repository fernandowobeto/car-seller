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

   public function add ()
   {
      return view('perfil.marcas.form');
   }

   public function create (PerfilMarcaSaveRequest $request)
   {
      $marca = new Marca();
      $marca->name = $request->get('name');
      $marca->save();

      return redirect()->route('perfil.marcas');
   }

   public function update ()
   {

   }

}
