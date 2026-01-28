<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string("name_en");
            $table->string("name_sw");
            $table->string("header_en");
            $table->string("header_sw");
            $table->string("description_en");
            $table->string("description_sw");
            $table->string("experience_years");
            $table->string("image_large");
            $table->string("image_small");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
