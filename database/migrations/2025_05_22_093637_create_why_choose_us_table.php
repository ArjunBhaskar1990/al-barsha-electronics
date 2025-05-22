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
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->text('desc');
            $table->tinyInteger('sat_customer');
            $table->tinyInteger('pro_completed');
            $table->string('title3');
            $table->text('desc2');
            $table->string('feature_title1');
            $table->string('feature_title2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};
