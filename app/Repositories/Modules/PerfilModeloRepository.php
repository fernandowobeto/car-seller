<?php

namespace App\Repositories\Modules;

use Illuminate\Support\Facades\DB;

class PerfilModeloRepository
{

   public function getModelos ()
   {
      return DB::table('modelos as mo')
         ->select('mo.*', 'ma.name AS marca_name')
         ->join('marcas as ma', 'ma.id', '=', 'mo.marca_id')
         ->get();
   }

}