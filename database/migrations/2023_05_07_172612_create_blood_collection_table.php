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
        Schema::create('blood_collection', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
            $table->foreignId('hospital_id')->constrained();
            $table->foreignId('blood_group_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->double('number_of_bags');
            $table->date('date_of_request');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//doctor or employee 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_collection');
    }
};
