<?php

namespace App\Http\Controllers;

use App\Entities\Marca;
use App\Entities\Modelo;
use App\Http\Requests\PerfilModeloSaveRequest;
use App\Repositories\Modules\PerfilModeloRepository;
use Illuminate\Http\Request;

class PerfilModeloController extends Controller
{

   public function index (PerfilModeloRepository $repository)
   {
      $modelos = $repository->getModelos();

      return view('perfil.modelos.index', compact('modelos'));
   }

   public function add ()
   {
      $marcas = Marca::all();

      return view('perfil.modelos.form', compact('marcas'));
   }

   public function create (PerfilModeloSaveRequest $request)
   {
      $marca = new Modelo();
      $marca->name = $request->get('name');
      $marca->marca_id = $request->get('marca_id');
      $marca->save();

      return redirect()->route('perfil.modelos');
   }

   public function update ()
   {

   }

}
