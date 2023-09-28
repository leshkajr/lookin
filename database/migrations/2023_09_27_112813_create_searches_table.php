<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('countryId')->nullable();
            $table->string('cityId')->nullable();
            $table->string('typeId')->nullable();
            $table->string('categoryId')->nullable();
            $table->date('arrivalDate')->nullable();
            $table->date('departureDate')->nullable();
            $table->unsignedSmallInteger('guests')->nullable();
            $table->unsignedInteger('priceStart')->nullable();
            $table->unsignedInteger('priceEnd')->nullable();
            $table->unsignedSmallInteger('countRooms')->nullable();
            $table->unsignedSmallInteger('countBathrooms')->nullable();
            $table->unsignedSmallInteger('countBeds')->nullable();
            $table->string('amenitiesStr',1000)->nullable();
            $table->string('languagesStr',1000)->nullable();
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
        Schema::dropIfExists('searches');
    }
};
