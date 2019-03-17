<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlberta2016sTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alberta2016s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->integer('homicide');
            $table->integer('first_degree_murder');
            $table->integer('second_degree_murder');
            $table->integer('manslaughter');
            $table->integer('infanticide');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alberta2016s');
    }
}
