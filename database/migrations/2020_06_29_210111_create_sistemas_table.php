<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('raca_id');
            $table->foreign('raca_id')->references('id')->on('racas');
            $table->string('sol');
            $table->integer('num_planetas');
            $table->unsignedBigInteger('conflito_id');
            $table->foreign('conflito_id')->references('id')->on('conflitos');
            $table->boolean('estacao');
            $table->unsignedBigInteger('galaxia_id');
            $table->foreign('galaxia_id')->references('id')->on('galaxias');
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
        Schema::dropIfExists('sistemas');
    }
}
