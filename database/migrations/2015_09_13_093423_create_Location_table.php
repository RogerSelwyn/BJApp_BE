<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('RegionId')->unsigned();
            $table->char('LocationName',50);
            $table->char('Address',200);
            $table->char('County',50);
            $table->char('Postcode',20);
            $table->char('Country',50);
            $table->longtext('Description');
            $table->decimal('Latitude',10,6);
            $table->decimal('Longitude',10,6);
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
        Schema::drop('Locations');
    }
}
