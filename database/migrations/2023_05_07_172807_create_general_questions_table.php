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
        Schema::create('general_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained()->onDelete('cascade')->onUpdate('cascade');//donor
            
            /*************** Q = questions ***********************/
            $table->string('Q1');
            $table->text('Q1_Notes');
            $table->boolean('Q1_status')->default(true);
            /***************************************************************** */
            $table->string('Q2');
            $table->text('Q2_Notes');
            $table->boolean('Q2_status')->default(true);
            /***************************************************************** */
            $table->string('Q3');
            $table->text('Q3_Notes');
            $table->boolean('Q3_status')->default(true);
            /***************************************************************** */
            $table->string('Q4');
            $table->text('Q4_Notes');
            $table->boolean('Q4_status')->default(true);
            /***************************************************************** */
            $table->string('Q5');
            $table->text('Q5_Notes');
            $table->boolean('Q5_status')->default(true);
            /***************************************************************** */
            $table->string('Q6');
            $table->text('Q6_Notes');
            $table->boolean('Q6_status')->default(true);
            /***************************************************************** */
            $table->string('Q7');
            $table->text('Q7_Notes');
            $table->boolean('Q7_status')->default(true);
            /***************************************************************** */
            $table->string('Q8');
            $table->text('Q8_Notes');
            $table->boolean('Q8_status')->default(true);
            /***************************************************************** */
            $table->string('Q9');
            $table->text('Q9_Notes');
            $table->boolean('Q9_status')->default(true);
            /***************************************************************** */
            $table->string('Q10');
            $table->text('Q10_Notes');
            $table->boolean('Q10_status')->default(true);
            /***************************************************************** */
            $table->string('Q11');
            $table->text('Q11_Notes');
            $table->boolean('Q11_status')->default(true);
            /***************************************************************** */
            $table->string('Q12');
            $table->text('Q12_Notes');
            $table->boolean('Q12_status')->default(true);
            /***************************************************************** */
            $table->string('Q13');
            $table->text('Q13_Notes');
            $table->boolean('Q13_status')->default(true);
            /***************************************************************** */
            $table->string('Q14');
            $table->text('Q14_Notes');
            $table->boolean('Q14_status')->default(true);
            /***************************************************************** */
            $table->string('Q15');
            $table->text('Q15_Notes');
            $table->boolean('Q15_status')->default(true);
            /***************************************************************** */
            $table->string('Q16');
            $table->text('Q16_Notes');
            $table->boolean('Q16_status')->default(true);
            /***************************************************************** */
            $table->string('Q17');
            $table->text('Q17_Notes');
            $table->boolean('Q17_status')->default(true);
            /***************************************************************** */
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_questions');
    }
};
