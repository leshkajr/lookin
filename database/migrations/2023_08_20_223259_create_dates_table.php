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
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listingId")->constrained("listings");
            $table->foreignId("reservedUserId")->constrained("users");
            $table->date("listingDate");
            $table->unsignedFloat("priceForThisDay")->nullable();
            $table->boolean("isAvailable")->default(true);
            $table->string("noteText",512);
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
        Schema::dropIfExists('dates');
    }
};
