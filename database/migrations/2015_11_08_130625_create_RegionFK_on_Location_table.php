<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionFKOnLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Locations', function (Blueprint $table) {
            $table->foreign('RegionId')->references('id')->on('Regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Locations', function (Blueprint $table) {
		$table->dropForeign('locations_regionid_foreign');
        });
    }
}
