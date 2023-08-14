<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('short_name', 10)->unique();
            $table->string('name', 255)->unique();
            $table->unsignedBigInteger('block_id')->nullable();
            $table->unsignedBigInteger('floor_id')->nullable();
            $table->timestamps();

            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('set null');
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('set null');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
