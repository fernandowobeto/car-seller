<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\Marca;
use App\Entities\Modelo;
use App\Http\Requests\PerfilModeloSaveRequest;
use App\Repositories\Modules\PerfilModeloRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModeloController extends Controller
{

   public function index (PerfilModeloRepository $repository)
   {
      $modelos = $repository->getModelos();

      return view('perfil.modelos.index', compact('modelos'));
   }

   public function form ($id = null)
   {
      $modelo = null;
      $action = route('perfil.modelo.create');

      if($id){
         $modelo = Modelo::find($id);
         $action =route('perfil.modelo.update', ['id' => $id]);
      }

      $marcas = Marca::all();

      return view('perfil.modelos.form', compact('modelo', 'marcas', 'action'));
   }

   public function create (PerfilModeloSaveRequest $request)
   {
      $modelo = new Modelo();
      $modelo->name = $request->get('name');
      $modelo->marca_id = $request->get('marca_id');
      $modelo->save();

      return redirect()->route('perfil.modelos');
   }

   public function update ($id, PerfilModeloSaveRequest $request)
   {
      $modelo = Modelo::find($id);
      $modelo->name = $request->get('name');
      $modelo->marca_id = $request->get('marca_id');
      $modelo->save();

      return redirect()->route('perfil.modelos');
   }

}
