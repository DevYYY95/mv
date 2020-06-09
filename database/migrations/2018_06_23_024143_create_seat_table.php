<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('A1')->default('0');
            $table->integer('A2')->default('0');
            $table->integer('A3')->default('0');
            $table->integer('A4')->default('0');
            $table->integer('A5')->default('0');
            $table->integer('A6')->default('0');
            $table->integer('A7')->default('0');
            $table->integer('A8')->default('0');
            $table->integer('A9')->default('0');
            $table->integer('A10')->default('0');
            $table->integer('A11')->default('0');
            $table->integer('A12')->default('0');
            $table->integer('A13')->default('0');
            $table->integer('A14')->default('0');
            $table->integer('A15')->default('0');
            $table->integer('A16')->default('0');
            $table->integer('A17')->default('0');
            $table->integer('A18')->default('0');
            $table->integer('A19')->default('0');
            $table->integer('A20')->default('0');
            $table->integer('B1')->default('0');
            $table->integer('B2')->default('0');
            $table->integer('B3')->default('0');
            $table->integer('B4')->default('0');
            $table->integer('B5')->default('0');
            $table->integer('B6')->default('0');
            $table->integer('B7')->default('0');
            $table->integer('B8')->default('0');
            $table->integer('B9')->default('0');
            $table->integer('B10')->default('0');
            $table->integer('B11')->default('0');
            $table->integer('B12')->default('0');
            $table->integer('B13')->default('0');
            $table->integer('B14')->default('0');
            $table->integer('B15')->default('0');
            $table->integer('B16')->default('0');
            $table->integer('B17')->default('0');
            $table->integer('B18')->default('0');
            $table->integer('B19')->default('0');
            $table->integer('B20')->default('0');
            $table->integer('C1')->default('0');
            $table->integer('C2')->default('0');
            $table->integer('C3')->default('0');
            $table->integer('C4')->default('0');
            $table->integer('C5')->default('0');
            $table->integer('C6')->default('0');
            $table->integer('C7')->default('0');
            $table->integer('C8')->default('0');
            $table->integer('C9')->default('0');
            $table->integer('C10')->default('0');
            $table->integer('C11')->default('0');
            $table->integer('C12')->default('0');
            $table->integer('C13')->default('0');
            $table->integer('C14')->default('0');
            $table->integer('C15')->default('0');
            $table->integer('C16')->default('0');
            $table->integer('C17')->default('0');
            $table->integer('C18')->default('0');
            $table->integer('C19')->default('0');
            $table->integer('C20')->default('0');
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
        Schema::dropIfExists('seat');
    }
}
