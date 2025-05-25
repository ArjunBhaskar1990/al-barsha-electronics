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
        Schema::create('our_approaches', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('approach_title1');
            $table->string('approach_title2');
            $table->text('description');
            $table->string('speciality1');
            $table->text('speciality1desc');
            $table->string('speciality2');
            $table->text('speciality2desc');
            $table->string('speciality3');
            $table->text('speciality3desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_approaches');
    }
};
