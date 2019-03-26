<?php

Route::get('/', 'IndexController@home')->name('home');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@login_action')->name('login_action');

Route::middleware('auth')->group(function () {
   Route::get('/logout', 'LoginController@logout')->name('logout');

   Route::get('/perfil', 'PerfilController@index')->name('perfil');
   Route::post('/perfil/update', 'PerfilController@update')->name('perfil.update');

   Route::get('/perfil/veiculo/add', 'PerfilController@veiculo_add')->name('perfil.veiculo.add');
   Route::post('/perfil/veiculo/add', 'PerfilController@veiculo_add')->name('perfil.veiculo.save');
   Route::get('/perfil/veiculos', 'PerfilController@veiculos')->name('perfil.veiculos');
   Route::get('/perfil/mensagens', 'PerfilController@mensagens')->name('perfil.mensagens');

   Route::middleware('auth.admin')->group(function () {
      Route::get('/perfil/marcas', 'PerfilMarcaController@index')->name('perfil.marcas');
      Route::get('/perfil/marcas/form/{id?}', 'PerfilMarcaController@form')
         ->name('perfil.marca.form')
         ->where('id', '[0-9]+');
      Route::post('/perfil/marcas/create', 'PerfilMarcaController@create')->name('perfil.marca.create');
      Route::post('/perfil/marcas/update/{id}', 'PerfilMarcaController@update')
         ->name('perfil.marca.update')
         ->where('id', '[0-9]+');

      Route::get('/perfil/modelos', 'PerfilModeloController@index')->name('perfil.modelos');
      Route::get('/perfil/modelos/form/{id?}', 'PerfilModeloController@form')
         ->name('perfil.modelo.form')
         ->where('id', '[0-9]+');
      Route::post('/perfil/modelos/create', 'PerfilModeloController@create')->name('perfil.modelo.create');
      Route::post('/perfil/modelos/update/{id}', 'PerfilModeloController@update')
         ->name('perfil.modelo.update')
         ->where('id', '[0-9]+');

      Route::get('/perfil/combustiveis', 'PerfilCombustivelController@index')->name('perfil.combustiveis');
      Route::get('/perfil/combustiveis/form/{id?}', 'PerfilCombustivelController@form')
         ->name('perfil.combustivel.form')
         ->where('id', '[0-9]+');
      Route::post('/perfil/combustiveis/create', 'PerfilCombustivelController@create')->name('perfil.combustivel.create');
      Route::post('/perfil/combustiveis/update/{id}', 'PerfilCombustivelController@update')
         ->name('perfil.combustivel.update')
         ->where('id', '[0-9]+');
   });
});

