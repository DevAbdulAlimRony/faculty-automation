<?php

use App\Models\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('semester_num')->unique();

            $table->foreignIdFor(Session::class)
                  ->nullable()
                  ->constrained()
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('semesters');
    }
};
