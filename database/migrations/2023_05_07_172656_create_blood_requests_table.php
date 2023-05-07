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
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->string('requested_by');
            $table->foreignId('recipient_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('blood_group_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->double('number_of_bags',20);
            $table->string('purpose');
            $table->date('date_of_request');
            $table->enum('request_status',['active','not_active']);
            $table->string('notes',200);
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//doctor or employee 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_requests');
    }
};
