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
        Schema::create('history_entries', function (Blueprint $table) {
            $table->id();
            $table->dateTime("dateTimeEntry");
            $table->foreignId("userId")->constrained("users");
            $table->string("deviceName",64)->nullable();
            $table->string("locationCountry",32)->nullable();
            $table->string("locationCity",32)->nullable();
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
        Schema::dropIfExists('history_entries');
    }
};
