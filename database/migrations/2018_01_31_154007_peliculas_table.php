<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('identificador')->unique();
            $table->string('titulo');
            $table->integer('ano')->nullable();
            $table->timestamps();
            $table->string('contigoPIPO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
