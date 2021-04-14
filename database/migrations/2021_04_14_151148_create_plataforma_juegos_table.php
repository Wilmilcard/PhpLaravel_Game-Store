<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlataformaJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforma_juegos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->integer('id_juego')->unsigned();
            $table->integer('id_plataforma')->unsigned();
            $table->timestamps();

            $table->foreign('id_juego')->references('id')->on('juegos');
            $table->foreign('id_plataforma')->references('id')->on('plataformas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plataforma_juegos');
    }
}
