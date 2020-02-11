<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('address');
            $table->string('room_no');
            $table->string('wing');
            $table->string('floor');
            $table->string('city');
            $table->string('state');
            $table->string('location');
            $table->double('latitude')->default('000000');
            $table->double('longitude')->default('000000');
            $table->string('pincode');
            $table->double('sqft');
            $table->bigInteger('price');
            $table->integer('bhk');
            $table->boolean('sold');
            $table->string('status');
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
        Schema::dropIfExists('properties');
    }
}
