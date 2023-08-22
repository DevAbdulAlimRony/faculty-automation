<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('student_in_abroad', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Student::class)
                  ->constrained('students', 'reg')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('country');
            $table->string('school');
            $table->string('degree');
            $table->string('scholarship_name')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_in_abroad');
    }
};
