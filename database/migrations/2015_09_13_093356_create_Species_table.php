<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SpeciesTypeId')->unsigned();
            $table->char('CommonName',50);
            $table->char('LatinName',50);
            $table->char('AliasName',50);
            $table->char('Gender',50);
            $table->char('Colouring',50);
            $table->char('MigratoryPattern',50);
            $table->longtext('Description');
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
        Schema::drop('Species');
    }
}
