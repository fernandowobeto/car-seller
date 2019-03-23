<?php

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('Admin')->group(function(){

   Route::get('/', 'LoginController@index');
   Route::post('/logar', 'LoginController@logar')->name('login.logar');

});

