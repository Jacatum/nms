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
            $table->string('sol');
            $table->boolean('estacao');
            $table->integer('num_planetas');
            $table->unsignedBigInteger('raca_id')->nullable();
            $table->foreign('raca_id')->references('id')->on('racas')->nullable();
            $table->unsignedBigInteger('conflito_id')->nullable();
            $table->foreign('conflito_id')->references('id')->on('conflitos')->nullable();
            $table->unsignedBigInteger('galaxia_id')->nullable();
            $table->foreign('galaxia_id')->references('id')->on('galaxias')->nullable();
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
