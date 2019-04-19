<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('placa', 7);
            $table->integer('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->integer('ano_fabricacao');
            $table->integer('ano_modelo');
            $table->integer('cambio_id');
            $table->foreign('cambio_id')->references('id')->on('cambios');
            $table->integer('combustivel_id');
            $table->foreign('combustivel_id')->references('id')->on('combustiveis');
            $table->integer('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->integer('cor_id');
            $table->foreign('cor_id')->references('id')->on('cores');
            $table->integer('quantidade_portas');
            $table->integer('kilometragem');
            $table->float('valor', 12, 2);
            $table->text('descricao')->nullable();
            $table->date('data_aprovado')->useCurrent();
            $table->boolean('free')->default(true);
            $table->boolean('finalizado')->default(false);
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
        Schema::dropIfExists('veiculos');
    }
}
