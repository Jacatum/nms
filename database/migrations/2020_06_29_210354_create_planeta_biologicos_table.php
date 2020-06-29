<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetaBiologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetas_biologicos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_planeta');
            $table->foreign('id_planeta')->references('id')->on('planetas');
            $table->unsignedBigInteger('id_biologico');
            $table->foreign('id_biologico')->references('id')->on('biologicos');
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
        Schema::dropIfExists('planetas_biologicos');
    }
}
