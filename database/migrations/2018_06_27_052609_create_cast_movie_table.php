<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast_movie', function (Blueprint $table) {
            $table->integer('cast_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->unique(['cast_id', 'movie_id']);
            $table->foreign('cast_id')->references('id')->on('casts');
            $table->foreign('movie_id')->references('id')->on('movies');
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
        Schema::dropIfExists('cast_movie');
    }
}
