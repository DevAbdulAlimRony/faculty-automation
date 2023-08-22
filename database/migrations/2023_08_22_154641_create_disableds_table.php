<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('disableds', function (Blueprint $table) {
            $table->id();
            $table->string('disease', 255)->nullable(false);

            $table->foreignIdFor(Student::class)
                  ->constrained('students', 'reg')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disableds');
    }
};
