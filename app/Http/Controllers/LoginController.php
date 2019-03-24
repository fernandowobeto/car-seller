<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

   public function login ()
   {
      return view('login');
   }

   public function login_action (Request $request)
   {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
         return redirect()->route('home');
      }

      return redirect()->route('login');
   }

   public function logout ()
   {
      Auth::logout();

      return redirect()->route('home');
   }

}
