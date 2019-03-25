<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('modelos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 60);
          $table->integer('marca_id');
          $table->foreign('marca_id')->references('id')->on('marcas');
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
       Schema::dropIfExists('modelos');
    }
}
