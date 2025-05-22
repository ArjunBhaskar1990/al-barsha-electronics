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
        Schema::table('why_choose_us', function (Blueprint $table) {
            $table->string('faq_title1')->after('youtube_link');
            $table->string('faq_title2')->after('faq_title1');
            $table->string('testi_title1')->after('faq_title2');
            $table->string('testi_title2')->after('testi_title1');
            $table->string('footer_title1')->after('testi_title2');
            $table->string('footer_title2')->after('footer_title1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('why_choose_us', function (Blueprint $table) {
            //
        });
    }
};
