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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string("languageCode",5)->nullable();
            $table->string("languageName",25);
            $table->string("languageNameNative",25)->nullable();
            $table->string("languageNameOnEnglish",25);
            $table->string("countryCode",5)->nullable();
            $table->string("countryName",25);
            $table->string("countryNameNative",25)->nullable();
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
        Schema::dropIfExists('languages');
    }
};
