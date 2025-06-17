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
        Schema::table('our_services', function (Blueprint $table) {
            $table->text('field1')->after('desc');
            $table->text('field2')->after('field1');
            $table->text('field3')->after('field2');
            $table->text('field4')->after('field3');
            $table->text('field5')->after('field4');
            $table->text('field6')->after('field5');
            $table->text('field7')->after('field6');
            $table->text('field8')->after('field7');
            $table->text('field9')->after('field8');
            $table->text('field10')->after('field9');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_services', function (Blueprint $table) {
            //
        });
    }
};
