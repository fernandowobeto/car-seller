<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $table = 'estados';

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }

}
