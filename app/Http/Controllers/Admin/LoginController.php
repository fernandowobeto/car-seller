<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends AdminController
{

   public function index ()
   {
      return view('admin.login');
   }

   public function logar (Request $request)
   {
      $credentials = $request->only('username', 'password');

      if (Auth::attempt($credentials)) {
         return redirect()->intended('dashboard');
      }
   }

}
