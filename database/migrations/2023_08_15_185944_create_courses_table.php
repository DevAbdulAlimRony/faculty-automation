<?php

use App\Models\Semester;
use App\Models\CourseType;
use App\Models\Department;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('code', 20)->primary();
            $table->string('title', 255)->unique();
            $table->unsignedDecimal('credit', 5, 3);

            $table->foreignIdFor(Semester::class)
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete()
                  ->onUpdate('cascade');

            $table->foreignIdFor(Department::class)
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete()
                  ->onUpdate('cascade');

            $table->foreignIdFor(CourseType::class)
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete()
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
