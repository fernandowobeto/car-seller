<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\Marca;

class Modelo extends Model
{

    protected $table = 'modelos';

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

}
