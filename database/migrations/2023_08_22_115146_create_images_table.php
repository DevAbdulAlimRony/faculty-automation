<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('filename')->nullable()->max(10);
            $table->string('foldername')->default('default')->max(10);
            $table->string('alt_text')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
