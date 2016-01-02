<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesFKOnSpeciesPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('SpeciesPhotos', function (Blueprint $table) {
            $table->foreign('SpeciesId')->references('id')->on('Species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('SpeciesPhotos', function (Blueprint $table) {
		$table->dropForeign('speciesphotos_speciesid_foreign');
        });
    }
}
