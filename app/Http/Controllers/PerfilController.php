<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{

   public function index ()
   {
      return view('perfil.index');
   }

   public function veiculos ()
   {
      return view('perfil.veiculos.index');
   }

   public function mensagens ()
   {
      return view('perfil.mensagens.index');
   }

   public function veiculo_add ()
   {
      return view('perfil.veiculos.veiculo_add');
   }

}
