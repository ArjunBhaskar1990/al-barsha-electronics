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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('title1');
            $table->string('title2');
            $table->text('desc');
            $table->string('feature1');
            $table->string('feature2');
            $table->string('client_image1');
            $table->string('client_image2');
            $table->string('client_image3');
            $table->string('client_image4');
            $table->string('client_image5');
            $table->string('bulb_title1');
            $table->string('bulb_title2');
            $table->tinyInteger('experience');
            $table->tinyInteger('review_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
