<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinemaMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_movie', function (Blueprint $table) {
            $table->integer('cinema_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->unique(['cinema_id', 'movie_id']);
            $table->foreign('cinema_id')->references('id')->on('cinemas');
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
        Schema::dropIfExists('cinema_movie');
    }
}
