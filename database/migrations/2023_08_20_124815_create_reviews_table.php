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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->constrained('users');
            $table->foreignId('listingId')->constrained('listings');
            $table->string("reviewText",256);
            $table->unsignedFloat("overallRating");
            $table->unsignedFloat("cleanlinessRating");
            $table->unsignedFloat("accuracyRating");
            $table->unsignedFloat("communicationRating");
            $table->unsignedFloat("locationRating");
            $table->unsignedFloat("checkInRating");
            $table->unsignedFloat("priceQualityRatioRating");
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
        Schema::dropIfExists('reviews');
    }
};
