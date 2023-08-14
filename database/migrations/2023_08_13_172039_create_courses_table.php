<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('code', 20)->primary();
            $table->string('title', 255)->unique();
            $table->decimal('credit', 5, 3);
            $table->unsignedBigInteger('semester_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('coursetype_id');
            $table->timestamps();

            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('set null');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
            $table->foreign('coursetype_id')->references('id')->on('coursetypes')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
