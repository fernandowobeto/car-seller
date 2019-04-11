<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoOpcionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_opcionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->integer('opcional_id');
            $table->foreign('opcional_id')->references('id')->on('opcionais');
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
        Schema::dropIfExists('veiculo_opcionais');
    }
}
