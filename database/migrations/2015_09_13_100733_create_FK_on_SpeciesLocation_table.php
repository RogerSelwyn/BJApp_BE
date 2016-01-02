<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFKOnSpeciesLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('SpeciesLocations', function (Blueprint $table) {
            $table->foreign('SpeciesId')->references('id')->on('Species');
            $table->foreign('LocationId')->references('id')->on('Locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('SpeciesLocations', function (Blueprint $table) {
		$table->dropForeign('specieslocations_speciesid_foreign');
		$table->dropForeign('specieslocations_locationid_foreign');
        });
    }
}
