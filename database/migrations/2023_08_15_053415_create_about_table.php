<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('CSE in PSTU');
            $table->text('overview')->nullable();
            $table->string('image')->nullable();

            $table->integer('established');
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();

            $table->string('address')->nullable();
            $table->string('building')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
