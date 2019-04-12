<?php

namespace App\Http\Controllers\Perfil;

use App\Entities\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{

    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('perfil.index', compact('user'));
    }

    public function mensagens()
    {
        return view('perfil.mensagens.index');
    }

}
