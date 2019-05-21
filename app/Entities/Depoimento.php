<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{

    protected $table = 'depoimentos';

    protected $fillable = [
        'name',
        'testimonial',
        'ativo'
    ];

}
