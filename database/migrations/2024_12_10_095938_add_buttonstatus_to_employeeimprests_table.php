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
  $table->enum('buttonstatus', ['0', '1', '2', '3', '4'])->default('0')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employeeimprests', function (Blueprint $table) {
            //
        });
    }
};
