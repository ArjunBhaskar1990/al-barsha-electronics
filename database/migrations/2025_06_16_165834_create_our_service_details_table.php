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
        Schema::create('our_service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->text('field1');
            $table->text('field2');
            $table->text('field3');
            $table->text('field4');
            $table->text('field5');
            $table->text('field6');
            $table->text('field7');
            $table->text('field8');
            $table->text('field9');
            $table->text('field10');
            $table->text('field11');
            $table->text('field12');
            $table->text('field13');
            $table->text('field14');
            $table->text('field15');
            $table->text('field16');
            $table->text('field17');
            $table->text('field18');
            $table->text('field19');
            $table->text('field20');
            $table->text('field21');
            $table->text('field22');
            $table->text('field23');
            $table->text('field24');
            $table->text('field25');
            $table->text('field26');
            $table->text('field27');
            $table->text('field28');
            $table->text('field29');
            $table->text('field30');
            $table->text('field31');
            $table->text('field32');
            $table->text('field33');
            $table->text('field34');
            $table->text('field35');

            $table->foreign('service_id')->references('id')->on('our_services')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_service_details');
    }
};
