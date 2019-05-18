<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('bem_vindo');
            $table->text('sobre');
            $table->text('servicos');
            $table->text('depoimentos');
            $table->text('noticias');
            $table->text('quem_somos');
            $table->text('nossa_missao');
            $table->text('porque_escolher');
            $table->integer('dias_anuncios')->default(30);
            $table->integer('id_tipo_novo_veiculo')->references('id')->on('tipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracoes');
    }
}
