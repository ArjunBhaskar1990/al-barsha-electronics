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
        Schema::create('expertises', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->text('desc');
            $table->tinyInteger('percent_1');
            $table->string('percent_title_1');
            $table->text('percent_desc_1');
            $table->tinyInteger('percent_2');
            $table->string('percent_title_2');
            $table->text('percent_desc_2');
            $table->tinyInteger('percent_3');
            $table->string('percent_title_3');
            $table->text('percent_desc_3');
            $table->tinyInteger('percent_4');
            $table->string('percent_title_4');
            $table->text('percent_desc_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expertises');
    }
};
