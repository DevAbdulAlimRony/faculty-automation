<?php

use App\Models\Block;
use App\Models\Floor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Block::class)
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete()
                  ->onUpdate('cascade');

            $table->foreignIdFor(Floor::class)
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete()
                  ->onUpdate('cascade');

            $table->string('short_name', 10)->unique();
            $table->string('name', 255)->unique();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
