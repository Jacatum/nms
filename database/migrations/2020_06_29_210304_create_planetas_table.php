<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->string('farm');
            $table->boolean('portal')->nullable();
            $table->string('sentinela')->nullable();
            $table->boolean('tempestade')->nullable();
            $table->boolean('agua')->nullable();
            $table->unsignedBigInteger('clima_id');
            $table->foreign('clima_id')->references('id')->on('climas')->nullable();
            $table->unsignedBigInteger('sistema_id');
            $table->foreign('sistema_id')->references('id')->on('sistemas');
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
        Schema::dropIfExists('planetas');
    }
}
