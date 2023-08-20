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
        Schema::create('photos_paths', function (Blueprint $table) {
            $table->id();
            $table->string("titlePhoto",128);
            $table->foreignId("typeObjectId")->constrained("object_types");
            $table->unsignedInteger("objectId");
            $table->string("path",256);
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
        Schema::dropIfExists('photos_paths');
    }
};
