<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('external_id');
            $table->string('unit');
            $table->string('floor');
            $table->string('building');
            $table->string('floorplan');
            $table->string('price');
            $table->string('price_override');
            $table->string('available_status');
            $table->string('available_date');
            $table->string('disabled');
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
        Schema::drop('units');
    }
}
