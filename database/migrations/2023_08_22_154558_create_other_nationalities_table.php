<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('other_nationalities', function (Blueprint $table) {
            $table->id();
            $table->string('nationality', 255)->nullable(false);

            $table->foreignIdFor(Student::class)
                 ->constrained('students', 'reg')
                 ->nullable()
                 ->onDelete('cascade')
                 ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('other_nationalities');
    }
};
