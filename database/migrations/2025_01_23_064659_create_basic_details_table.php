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
        Schema::create('basic_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_name_id')->nullable();
            $table->string('number')->nullable();
             $table->string('date')->nullable();
            $table->string('par_gst')->nullable();
            $table->string('par_amt')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->string('ip')->nullable();
            $table->string('strtotime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_details');
    }
};
