<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Entities\Estado;
use App\Entities\Cidade;

class EstadosCidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = file_get_contents(storage_path('estados-cidades.json'));

        $estados = json_decode($estados)->estados;

        DB::beginTransaction();

        foreach ($estados as $estado) {
            $est = new Estado();
            $est->name = $estado->nome;
            $est->uf = $estado->sigla;
            $est->save();
            
            foreach ($estado->cidades as $cidade) {
                $cid = new Cidade();
                $cid->name = $cidade;
                $cid->estado_id = $est->id;
                $cid->save();
            }
        }

        DB::commit();
    }
}
