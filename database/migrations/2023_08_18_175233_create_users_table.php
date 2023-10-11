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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('age')->nullable();
            $table->string('lastName')->nullable();
            $table->string('profilePhoto',256)->nullable();
            $table->string('numberPhone')->nullable()->unique();
            $table->foreignId("addressId")->nullable()->constrained("addresses");
            $table->string('facebookAccLink')->nullable();
            $table->string('instagramAccLink')->nullable();
            $table->string('languageView')->default("en");
            $table->string('currencyView')->default("USD");
            $table->boolean('isHost')->default(false);
            $table->string('nickname')->nullable();
            $table->text('description')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
