<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeMarcasTable extends Migration
{

    public function up()
    {
       Schema::create('marcas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 40)->unique();
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
       Schema::dropIfExists('marcas');
    }
}
