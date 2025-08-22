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
        Schema::table('employeeimprests', function (Blueprint $table) {
            //
            
             $table->string('invoice_proof')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employeeimprests', function (Blueprint $table) {
            //
             $table->string('invoice_proof')->nullable(false)->change();
        });
    }
};
