<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gains', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable()->default('');
            $table->string('gain_from');
            $table->string('gain_for');
            $table->timestamps();

            $table->unsignedBigInteger('gainable_id');
            $table->string('gainable_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gains');
    }
};
