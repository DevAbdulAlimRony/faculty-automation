<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('course_teacher', function (Blueprint $table) {
            
            $table->string('course_code');
            $table->foreign('course_code')
                  ->references('code')
                  ->on('courses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreignId('teacher_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->primary(['course_code', 'teacher_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_teacher');
    }
};
