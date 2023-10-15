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
            $table->string("description",1536)->nullable();
            $table->foreignId("hostId")->constrained("users");
            $table->foreignId("categoryId")->constrained("category_listings");
            $table->foreignId("typeId")->constrained("type_listings");
            $table->unsignedFloat("rating")->nullable();
            $table->unsignedInteger("countReviews")->default(0);
            $table->unsignedInteger("countRooms")->nullable();
            $table->unsignedInteger("countBathrooms")->nullable();
            $table->unsignedInteger("countLikes")->default(0);
            $table->unsignedFloat("priceForNight")->nullable();
            $table->unsignedFloat("priceCleaning")->nullable();
            $table->unsignedInteger("discountWeek")->nullable();
            $table->unsignedInteger("discountMonth")->nullable();
            $table->unsignedInteger("minRent")->default(1);
            $table->unsignedInteger("maxRent")->default(365);
            $table->boolean("needsConfirmFromHost")->nullable();
            $table->unsignedInteger("sleepingPlacesId")->nullable();
            $table->boolean("isAvailable")->default(false);
            $table->boolean("isPublic")->default(false);
            $table->boolean("isAlone")->nullable();
            $table->boolean("isAnimals")->nullable();
            $table->foreignId("countryId")->nullable()->constrained("countries");
            $table->foreignId("cityId")->nullable()->constrained("cities");
            $table->foreignId("addressId")->nullable()->constrained("addresses");
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
