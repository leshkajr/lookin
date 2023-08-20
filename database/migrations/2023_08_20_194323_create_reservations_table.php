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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listingId")->constrained("listings");
            $table->foreignId("userId")->constrained("users");
            $table->dateTime("arrivalDate");
            $table->dateTime("departureDate");
            $table->unsignedInteger("countNight");
            $table->unsignedInteger("countGuests");
            $table->unsignedFloat("totalPrice"); // in dollars
            $table->boolean("isConfirmed");
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
        Schema::dropIfExists('reservations');
    }
};
