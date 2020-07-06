<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetaMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetas_minerais', function (Blueprint $table) {
            $table->unsignedBigInteger('planeta_id');
            $table->foreign('planeta_id')->references('id')->on('planetas');
            $table->unsignedBigInteger('mineral_id');
            $table->foreign('mineral_id')->references('id')->on('minerais');
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
        Schema::dropIfExists('planetas_minerais');
    }
}
