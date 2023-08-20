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
        Schema::create('requirement_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("userId")->constrained("users");
            $table->string("title",64);
            $table->string("description",256);
            $table->string("typeAction",16);
            $table->boolean("isAvailable")->default(true);
            $table->string("urlNavigate",256)->nullable();
            $table->string("textNavigate",64)->nullable();
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
        Schema::dropIfExists('requirement_actions');
    }
};
