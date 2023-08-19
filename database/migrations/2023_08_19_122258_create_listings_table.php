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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string("title",64);
            $table->string("description",512);
            $table->unsignedInteger("hostId");
            $table->unsignedInteger("categoryId");
            $table->unsignedInteger("typeId");
            $table->unsignedFloat("rating");
            $table->unsignedInteger("countReviews");
            $table->unsignedInteger("countRooms");
            $table->unsignedInteger("countBathrooms");
            $table->unsignedInteger("countLikes");
            $table->unsignedFloat("priceCleaning");
            $table->unsignedInteger("discountWeek");
            $table->unsignedInteger("discountMonth");
            $table->unsignedInteger("maxRent");
            $table->unsignedInteger("minRent");
            $table->boolean("needsConfirmFromHost");
            $table->unsignedInteger("sleepingPlacesId");
            $table->boolean("isAvailable");
            $table->boolean("isPublic");
            $table->boolean("isAlone");
            $table->boolean("isAnimals");
            $table->unsignedInteger("countryId");
            $table->unsignedInteger("cityId");
            $table->unsignedInteger("addressId");
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
        Schema::dropIfExists('listings');
    }
};
