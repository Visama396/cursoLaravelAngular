<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosTableAndRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('identificador')->unique();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('genero_pelicula', function(Blueprint $table) {
            $table->increments('id');
            
            $table->integer('genero_id')->unsigned();
            $table->foreign(['genero_id'])->references('id')->on('generos')->onDelete('cascade');

            $table->integer('pelicula_id')->unsigned();
            $table->foreign(['pelicula_id'])->references('id')->on('peliculas')->onDelete('cascade');

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
        Schema::dropIfExists('genero_pelicula');
        Schema::dropIfExists('generos');
    }
}