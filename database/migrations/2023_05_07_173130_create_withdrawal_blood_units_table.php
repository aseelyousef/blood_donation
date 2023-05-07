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
        Schema::create('withdrawal_blood_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
            $table->boolean('was_blood_donated')->default(true);
            $table->text('donated_notes');
            $table->double('unit_weight');
            $table->string('bag_type');
            $table->float('hemoglobin_percentage');
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
        Schema::dropIfExists('withdrawal_blood_units');
    }
};
