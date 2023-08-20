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
        Schema::create('payments_listings_users_hosts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("listingId")->constrained("listings");
            $table->foreignId("userId")->constrained("users");
            $table->foreignId("hostId")->constrained("users");
            $table->foreignId("paymentId")->constrained("payments");
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
        Schema::dropIfExists('payments_listings_users_hosts');
    }
};
