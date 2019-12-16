<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opiniones', function (Blueprint $table) {

            $table->increments('id');
            $table->text('texto');
            $table->dateTime('fecha');
            $table->integer('usuario_id')->unsigned()->nullable(false);
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->integer('temas_id')->unsigned()->nullable(false);
            $table->foreign('temas_id')->references('id')->on('temas');
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
        Schema::dropIfExists('opiniones');
    }
}
