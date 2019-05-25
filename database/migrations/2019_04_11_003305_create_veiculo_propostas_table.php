<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoPropostasTable extends Migration
{

    public function up()
    {
        Schema::create('veiculo_propostas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('veiculo_id')->references('id')->on('veiculos');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 14);
            $table->text('proposal');
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('veiculo_propostas');
    }
}
