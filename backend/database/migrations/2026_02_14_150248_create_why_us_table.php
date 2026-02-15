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
        Schema::create('why_us', function (Blueprint $table) {
            $table->id();
            $table->string('header_en');
            $table->string('header_sw');
            $table->string('sub_header_en');
            $table->string('sub_header_sw');
            $table->string('item1_header_en');
            $table->string('item1_header_sw');
            $table->string('item1_sub_header_en');
            $table->string('item1_sub_header_sw');
            $table->string('item2_header_en');
            $table->string('item2_header_sw');
            $table->string('item2_sub_header_en');
            $table->string('item2_sub_header_sw');
            $table->string('item3_header_en');
            $table->string('item3_header_sw');
            $table->string('item3_sub_header_en');
            $table->string('item3_sub_header_sw');
            $table->string('image_front');
            $table->string('image_back');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_us');
    }
};
