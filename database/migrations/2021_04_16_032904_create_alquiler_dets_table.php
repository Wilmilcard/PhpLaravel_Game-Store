<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler_dets', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->integer('id_alquiler')->unsigned();
            $table->integer('id_juego')->unsigned();
            $table->integer('cantidad');
            $table->integer('valor');
            $table->timestamps();

            $table->foreign('id_alquiler')->references('id')->on('alquilers')->onDelete('cascade');
            $table->foreign('id_juego')->references('id')->on('juegos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquiler_dets');
    }
}
