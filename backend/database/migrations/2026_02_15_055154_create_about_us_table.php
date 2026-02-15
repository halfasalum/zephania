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
            $table->string("header_en");
            $table->string("header_sw");
            $table->string("contents_en");
            $table->string("contents_sw");
            $table->string("item1_header_en");
            $table->string("item1_header_sw");
            $table->string("item1_subheader_en");
            $table->string("item1_subheader_sw");
            $table->string("item2_header_en");
            $table->string("item2_header_sw");
            $table->string("item2_subheader_en");
            $table->string("item2_subheader_sw");
            $table->integer("experience")->nullable()->default(10);
            $table->string("image_front");
            $table->string("image_back");
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
