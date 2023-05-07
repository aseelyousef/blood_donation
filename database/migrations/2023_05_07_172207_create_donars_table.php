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
        Schema::create('donars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth');
            $table->double('age');
            $table->enum('gender',['male','female']);
            $table->string('phone_number')->unique();
            $table->string('ID_number')->unique(); // رقم الهوية 
            $table->string('address');
            $table->foreignId('blood_group_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('role_id')->constrained();
            $table->enum('status',['active','not_active']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donars');
    }
};
