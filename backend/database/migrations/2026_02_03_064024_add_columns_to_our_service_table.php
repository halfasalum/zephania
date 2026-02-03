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
        Schema::table('our_service', function (Blueprint $table) {
            $table->string("icon");
            $table->string("description_en");
            $table->string("description_sw");
            $table->boolean("is_active")->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_service', function (Blueprint $table) {
            $table->dropColumn(["icon", "description_en", "description_sw", "is_active"]);
        });
    }
};
