<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('slug');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('url');
            $table->string('availability_username');
            $table->string('availability_password');
            $table->string('availability_identifier');
            $table->string('availability_provider');
            $table->string('availability_structure');
            $table->string('cms_logo');
            $table->string('cms_image');
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
        Schema::drop('property');
    }
}
