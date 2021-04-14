<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('ano');
            $table->integer('id_director')->unsigned();
            $table->integer('stock');
            $table->integer('precio');
            $table->timestamps();

            $table->foreign('id_director')->references('id')->on('directors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
}
