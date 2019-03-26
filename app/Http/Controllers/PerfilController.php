<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{

   public function index ()
   {
      $user = User::find(Auth::user()->id);

      return view('perfil.index', compact('user'));
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
