<?php

Route::get('/', 'IndexController@home')->name('home');
Route::get('/vehicles', 'IndexController@veiculos')->name('veiculos');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/detail/{id}', 'IndexController@detail')->name('veiculo.detail')
    ->where('id', '[0-9]+');

Route::get('/modelos/{id}', 'IndexController@getModelos')
    ->where('id', '[0-9]+');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@login_action')->name('login_action');

Route::middleware('auth')->group(function () {
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::namespace('Perfil')->prefix('profile')->name('perfil.')->group(function () {
        Route::get('/', 'PerfilController@index')->name('perfil');
        Route::get('/cidades/{id}', 'PerfilController@getCidades')
            ->where('id', '[0-9]+');
        Route::post('update', 'PerfilController@update')->name('update');

        Route::get('/vehicles', 'VeiculoController@index')->name('veiculos');
        Route::get('/vehicle/form', 'VeiculoController@form')->name('veiculo.form');
        Route::get('/vehicle/models/{id}', 'VeiculoController@getModelos')
            ->where('id', '[0-9]+');
        Route::post('/vehicle/create', 'VeiculoController@create')->name('veiculo.create');
        Route::middleware('auth.veiculo.finalizar')->get('/vehicle/finish/{id}', 'VeiculoController@finalizar')
            ->where('id', '[0-9]+')->name('veiculo.finalizar');
        Route::get('/proposals', 'PropostaController@index')->name('propostas');
        Route::get('/proposals/detail/{id}', 'PropostaController@detail')
            ->where('id', '[0-9]+')->name('propostas.detail');

        Route::middleware('auth.admin')->group(function () {
            Route::get('/settings', 'ConfiguracoesController@form')->name('configuracoes');
            Route::post('/settings', 'ConfiguracoesController@save')->name('configuracoes.save');

            Route::get('/brands', 'MarcaController@index')->name('marcas');
            Route::get('/brands/form/{id?}', 'MarcaController@form')
                ->name('marca.form')
                ->where('id', '[0-9]+');
            Route::post('/brands/create', 'MarcaController@create')->name('marca.create');
            Route::post('/brands/update/{id}', 'MarcaController@update')
                ->name('marca.update')
                ->where('id', '[0-9]+');

            Route::get('/models', 'ModeloController@index')->name('modelos');
            Route::get('/models/form/{id?}', 'ModeloController@form')
                ->name('modelo.form')
                ->where('id', '[0-9]+');
            Route::post('/models/create', 'ModeloController@create')->name('modelo.create');
            Route::post('/models/update/{id}', 'ModeloController@update')
                ->name('modelo.update')
                ->where('id', '[0-9]+');

            Route::get('/colors', 'CorController@index')->name('cores');
            Route::get('/colors/form/{id?}', 'CorController@form')
                ->name('cor.form')
                ->where('id', '[0-9]+');
            Route::post('/colors/create', 'CorController@create')->name('cor.create');
            Route::post('/colors/update/{id}', 'CorController@update')
                ->name('cor.update')
                ->where('id', '[0-9]+');

            Route::get('/transmissions', 'CambioController@index')->name('cambios');
            Route::get('/transmissions/form/{id?}', 'CambioController@form')
                ->name('cambio.form')
                ->where('id', '[0-9]+');
            Route::post('/transmissions/create', 'CambioController@create')->name('cambio.create');
            Route::post('/transmissions/update/{id}', 'CambioController@update')
                ->name('cambio.update')
                ->where('id', '[0-9]+');

            Route::get('/optionals', 'OpcionalController@index')->name('opcionais');
            Route::get('/optionals/form/{id?}', 'OpcionalController@form')
                ->name('opcional.form')
                ->where('id', '[0-9]+');
            Route::post('/optionals/create', 'OpcionalController@create')->name('opcional.create');
            Route::post('/optionals/update/{id}', 'OpcionalController@update')
                ->name('opcional.update')
                ->where('id', '[0-9]+');

            Route::get('/additional', 'AdicionalController@index')->name('adicionais');
            Route::get('/additional/form/{id?}', 'AdicionalController@form')
                ->name('adicional.form')
                ->where('id', '[0-9]+');
            Route::post('/additional/create', 'AdicionalController@create')->name('adicional.create');
            Route::post('/additional/update/{id}', 'AdicionalController@update')
                ->name('adicional.update')
                ->where('id', '[0-9]+');

            Route::get('/types', 'TipoController@index')->name('tipos');
            Route::get('/types/form/{id?}', 'TipoController@form')
                ->name('tipo.form')
                ->where('id', '[0-9]+');
            Route::post('/types/create', 'TipoController@create')->name('tipo.create');
            Route::post('/types/update/{id}', 'TipoController@update')
                ->name('tipo.update')
                ->where('id', '[0-9]+');

            Route::get('/fuel', 'CombustivelController@index')->name('combustiveis');
            Route::get('/fuel/form/{id?}', 'CombustivelController@form')
                ->name('combustivel.form')
                ->where('id', '[0-9]+');
            Route::post('/fuel/create', 'CombustivelController@create')->name('combustivel.create');
            Route::post('/fuel/update/{id}', 'CombustivelController@update')
                ->name('combustivel.update')
                ->where('id', '[0-9]+');

            Route::get('/cities', 'CidadeController@index')->name('cidades');
            Route::get('/cities/form', 'CidadeController@form')
                ->name('cidade.form');
            Route::post('/cities/create', 'CidadeController@create')->name('cidade.create');

            Route::get('/testimonials', 'DepoimentoController@index')->name('depoimentos');
            Route::get('/testimonials/form/{id?}', 'DepoimentoController@form')
                ->name('depoimento.form')
                ->where('id', '[0-9]+');
            Route::post('/testimonials/create', 'DepoimentoController@create')->name('depoimento.create');
            Route::post('/testimonials/update/{id}', 'DepoimentoController@update')
                ->name('depoimento.update')
                ->where('id', '[0-9]+');
        });
    });
});

