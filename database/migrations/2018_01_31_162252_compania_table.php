<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompaniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoras', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::table('peliculas', function(Blueprint $table) {
            $table->integer('productora_id')->unsigned()->nullable();
            $table->foreign('productora_id')->references('id')->on('productoras')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peliculas', function(Blueprint $table) {
            $table->dropForeign(['productora_id']);
            $table->dropColumn('productora_id');
        });

        Schema::dropIfExists('productoras');
    }
}
