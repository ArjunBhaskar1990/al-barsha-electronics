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
        Schema::create('why_choose_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->string('ourbranch_title1');
            $table->string('ourbranch_title2');
            $table->text('desc');
            $table->string('percentage_title1');
            $table->string('percentage_title1_count');
            $table->string('percentage_title2');
            $table->string('percentage_title2_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_abouts');
    }
};
