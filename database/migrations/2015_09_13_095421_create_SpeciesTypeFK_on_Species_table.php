<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesTypeFKOnSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Species', function (Blueprint $table) {
            $table->foreign('SpeciesTypeId')->references('id')->on('SpeciesTypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Species', function (Blueprint $table) {
		$table->dropForeign('species_speciestypeid_foreign');
        });
    }
}
