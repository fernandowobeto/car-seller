<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Cambios;
use App\Http\Requests\PerfilCambioSaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CambioController extends Controller
{

   public function index()
   {
      $cambios = Cambios::all();

      return view('perfil.cambios.index', compact('cambios'));
   }

   public function form($id = null)
   {
      $cambio = null;
      $action = route('perfil.cambio.create');

      if ($id) {
         $cambio = Cambios::find($id);
         $action = route('perfil.cambio.update', ['id' => $id]);
      }

      return view('perfil.cambios.form', compact('cambio', 'action'));
   }

   public function create(PerfilCambioSaveRequest $request)
   {
      $cambio       = new Cambios();
      $cambio->name = $request->get('name');
      $cambio->save();

      return redirect()->route('perfil.cambios');
   }

   public function update($id, PerfilCambioSaveRequest $request)
   {
      $cambio       = Cambio::find($id);
      $cambio->name = $request->get('name');
      $cambio->save();

      return redirect()->route('perfil.cambios');
   }

}
