<?php

namespace App\Entities;

use FernandoWobeto\ModelFillableControl\Model;

class Veiculo extends Model
{

    protected $table = 'veiculos';

    protected $fillable = [
        'user_id',
        'placa',
        'modelo_id',
        'ano_fabricacao',
        'ano_modelo',
        'cambio_id',
        'combustivel_id',
        'tipo_id',
        'cor_id',
        'quantidade_portas',
        'kilometragem',
        'valor',
        'descricao',
        'data_aprovado',
        'free'
    ];

}
