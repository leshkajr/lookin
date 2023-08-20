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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->string("numberCard",20);
            $table->string("validityPeriodCard",6);
            $table->unsignedInteger("CVVCard");
            $table->foreignId("addressId")->constrained("addresses");
            $table->foreignId("userId")->constrained("users");
            $table->boolean("isMainCard");
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
        Schema::dropIfExists('credit_cards');
    }
};
