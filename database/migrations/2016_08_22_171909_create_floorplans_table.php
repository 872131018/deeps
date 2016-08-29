<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floorplans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('external_id');
            $table->string('floorplan');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('den');
            $table->string('loft');
            $table->string('penthouse');
            $table->string('townhome');
            $table->string('area_min');
            $table->string('area_max');
            $table->text('description');
            $table->text('images');
            $table->softDeletes();
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
        Schema::drop('floorplans');
    }
}
