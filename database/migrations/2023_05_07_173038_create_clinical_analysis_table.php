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
        Schema::create('clinical_analysis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
            $table->double('blood_pressure');
            $table->double('heartbeats');
            $table->double('body_temp');
            $table->text('notes');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//doctor or employee 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinical_analysis');
    }
};
