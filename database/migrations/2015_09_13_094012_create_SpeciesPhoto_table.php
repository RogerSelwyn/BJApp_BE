<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpeciesPhotos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SpeciesId')->unsigned();
            $table->char('ThumbnailLocation',200);
            $table->char('PhotoLocation',200);
            $table->boolean('IsDefault');
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
        Schema::drop('SpeciesPhotos');
    }
}
