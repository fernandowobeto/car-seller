<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoAdicionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_adicionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->integer('adicional_id');
            $table->foreign('adicional_id')->references('id')->on('adicionais');
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
        Schema::dropIfExists('veiculo_adicionais');
    }
}
