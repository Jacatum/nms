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
            $table->unsignedBigInteger('planeta_id');
            $table->foreign('planeta_id')->references('id')->on('planetas');
            $table->unsignedBigInteger('biologico_id');
            $table->foreign('biologico_id')->references('id')->on('biologicos');
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
