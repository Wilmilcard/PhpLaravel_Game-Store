<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtagonistaJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protagonista_juegos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->integer('id_juego')->unsigned();
            $table->integer('id_protagonista')->unsigned();
            $table->timestamps();

            $table->foreign('id_juego')->references('id')->on('juegos')->onDelete('cascade');
            $table->foreign('id_protagonista')->references('id')->on('protagonistas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protagonista_juegos');
    }
}
