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
        Schema::create('separation_blood_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
            $table->boolean('Q1_appropriate')->default(true);
            $table->boolean('Q2_appropriate')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//doctor or employee 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('separation_blood_components');
    }
};
