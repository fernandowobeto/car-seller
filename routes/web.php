<?php

Route::get('/', 'IndexController@home')->name('home');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@login_action')->name('login_action');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/perfil/veiculo/add', 'PerfilController@veiculo_add')->name('perfil.veiculo.add');
Route::post('/perfil/veiculo/add', 'PerfilController@veiculo_add')->name('perfil.veiculo.save');
Route::get('/perfil/veiculos', 'PerfilController@veiculos')->name('perfil.veiculos');
Route::get('/perfil/mensagens', 'PerfilController@mensagens')->name('perfil.mensagens');

