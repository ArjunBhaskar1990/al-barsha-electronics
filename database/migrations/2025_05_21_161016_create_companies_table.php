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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('company_name');
            $table->text('company_desc');
            $table->text('address1');
            $table->text('address2');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('pinterest');
            $table->string('xlink');
            $table->string('fblink');
            $table->string('instagram');
            $table->text('google_map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
