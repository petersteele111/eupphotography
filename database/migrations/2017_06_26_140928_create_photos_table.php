<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create the Photo's Table
        Schema::create('photos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->integer('album')->unsigned();
            $table->timestamps();
        });

        Schema::table('photos', function (Blueprint $table){
            $table->foreign('album')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop the Photo's Table
        Schema::dropIfExists('photos');
    }
}