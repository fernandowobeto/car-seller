<?php

Route::get('/', 'IndexController@home')->name('home');
Route::get('/veiculos', 'IndexController@veiculos')->name('veiculos');

Route::get('/modelos/{id}', 'IndexController@getModelos')
    ->where('id', '[0-9]+');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@login_action')->name('login_action');

Route::middleware('auth')->group(function () {
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::namespace('Perfil')->prefix('perfil')->name('perfil.')->group(function () {
        Route::get('/', 'PerfilController@index')->name('perfil');
        Route::get('/cidades/{id}', 'PerfilController@getCidades')
            ->where('id', '[0-9]+');
        Route::post('update', 'PerfilController@update')->name('update');

        Route::get('/veiculos', 'VeiculoController@index')->name('veiculos');
        Route::get('/veiculo/form', 'VeiculoController@form')->name('veiculo.form');
        Route::get('/veiculo/modelos/{id}', 'VeiculoController@getModelos')
            ->where('id', '[0-9]+');
        Route::post('/veiculo/create', 'VeiculoController@create')->name('veiculo.create');
        Route::middleware('auth.veiculo.finalizar')->get('/veiculo/finalizar/{id}', 'VeiculoController@finalizar')
            ->where('id', '[0-9]+')->name('veiculo.finalizar');
        Route::get('/mensagens', 'VeiculoController@mensagens')->name('mensagens');

        Route::middleware('auth.admin')->group(function () {
            Route::get('/marcas', 'MarcaController@index')->name('marcas');
            Route::get('/marcas/form/{id?}', 'MarcaController@form')
                ->name('marca.form')
                ->where('id', '[0-9]+');
            Route::post('/marcas/create', 'MarcaController@create')->name('marca.create');
            Route::post('/marcas/update/{id}', 'MarcaController@update')
                ->name('marca.update')
                ->where('id', '[0-9]+');

            Route::get('/modelos', 'ModeloController@index')->name('modelos');
            Route::get('/modelos/form/{id?}', 'ModeloController@form')
                ->name('modelo.form')
                ->where('id', '[0-9]+');
            Route::post('/modelos/create', 'ModeloController@create')->name('modelo.create');
            Route::post('/modelos/update/{id}', 'ModeloController@update')
                ->name('modelo.update')
                ->where('id', '[0-9]+');

            Route::get('/cores', 'CorController@index')->name('cores');
            Route::get('/cores/form/{id?}', 'CorController@form')
                ->name('cor.form')
                ->where('id', '[0-9]+');
            Route::post('/cores/create', 'CorController@create')->name('cor.create');
            Route::post('/cores/update/{id}', 'CorController@update')
                ->name('cor.update')
                ->where('id', '[0-9]+');

            Route::get('/cambios', 'CambioController@index')->name('cambios');
            Route::get('/cambios/form/{id?}', 'CambioController@form')
                ->name('cambio.form')
                ->where('id', '[0-9]+');
            Route::post('/cambios/create', 'CambioController@create')->name('cambio.create');
            Route::post('/cambios/update/{id}', 'CambioController@update')
                ->name('cambio.update')
                ->where('id', '[0-9]+');

            Route::get('/opcionais', 'OpcionalController@index')->name('opcionais');
            Route::get('/opcionais/form/{id?}', 'OpcionalController@form')
                ->name('opcional.form')
                ->where('id', '[0-9]+');
            Route::post('/opcionais/create', 'OpcionalController@create')->name('opcional.create');
            Route::post('/opcionais/update/{id}', 'OpcionalController@update')
                ->name('opcional.update')
                ->where('id', '[0-9]+');

            Route::get('/adicionais', 'AdicionalController@index')->name('adicionais');
            Route::get('/adicionais/form/{id?}', 'AdicionalController@form')
                ->name('adicional.form')
                ->where('id', '[0-9]+');
            Route::post('/adicionais/create', 'AdicionalController@create')->name('adicional.create');
            Route::post('/adicionais/update/{id}', 'AdicionalController@update')
                ->name('adicional.update')
                ->where('id', '[0-9]+');

            Route::get('/tipos', 'TipoController@index')->name('tipos');
            Route::get('/tipos/form/{id?}', 'TipoController@form')
                ->name('tipo.form')
                ->where('id', '[0-9]+');
            Route::post('/tipos/create', 'TipoController@create')->name('tipo.create');
            Route::post('/tipos/update/{id}', 'TipoController@update')
                ->name('tipo.update')
                ->where('id', '[0-9]+');

            Route::get('/combustiveis', 'CombustivelController@index')->name('combustiveis');
            Route::get('/combustiveis/form/{id?}', 'CombustivelController@form')
                ->name('combustivel.form')
                ->where('id', '[0-9]+');
            Route::post('/combustiveis/create', 'CombustivelController@create')->name('combustivel.create');
            Route::post('/combustiveis/update/{id}', 'CombustivelController@update')
                ->name('combustivel.update')
                ->where('id', '[0-9]+');

            Route::get('/cidades', 'CidadeController@index')->name('cidades');
            Route::get('/cidades/form', 'CidadeController@form')
                ->name('cidade.form');
            Route::post('/cidades/create', 'CidadeController@create')->name('cidade.create');
        });
    });
});

