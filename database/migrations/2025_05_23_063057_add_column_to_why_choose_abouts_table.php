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
        Schema::table('why_choose_abouts', function (Blueprint $table) {

            $table->string('image1')->after('title2');
            $table->string('image2')->after('image1');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('why_choose_abouts', function (Blueprint $table) {
            //
        });
    }
};
