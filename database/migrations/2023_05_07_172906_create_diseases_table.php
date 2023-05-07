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
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
             /*************** Q = questions ***********************/
             $table->string('Q1');
             $table->boolean('Q1_status')->default(true);
             /***************************************************************** */
             $table->string('Q2');
             $table->boolean('Q2_status')->default(true);
             /***************************************************************** */
             $table->string('Q3');
             $table->boolean('Q3_status')->default(true);
             /***************************************************************** */
             $table->string('Q4');
             $table->boolean('Q4_status')->default(true);
             /***************************************************************** */
             $table->string('Q5');
             $table->boolean('Q5_status')->default(true);
             /***************************************************************** */
             $table->string('Q6');
             $table->boolean('Q6_status')->default(true);
             /***************************************************************** */
             $table->string('Q7');
             $table->boolean('Q7_status')->default(true);
             /***************************************************************** */
             $table->string('Q8');
             $table->boolean('Q8_status')->default(true);
             /***************************************************************** */
             $table->string('Q9');
             $table->boolean('Q9_status')->default(true);
             /***************************************************************** */
             $table->string('Q10');
             $table->boolean('Q10_status')->default(true);
             /***************************************************************** */
             $table->string('Q11');
             $table->boolean('Q11_status')->default(true);
             /***************************************************************** */
             $table->string('Q12');
             $table->boolean('Q12_status')->default(true);
             /***************************************************************** */
             $table->string('Q13');
             $table->boolean('Q13_status')->default(true);
             /***************************************************************** */
             $table->string('Q14');
             $table->boolean('Q14_status')->default(true);
             /***************************************************************** */
             $table->string('Q15');
             $table->boolean('Q15_status')->default(true);
             /***************************************************************** */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diseases');
    }
};
