<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_guests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('event_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('name');
            $table->string('profession')->nullable();
            $table->string('company')->nullable();
            $table->string('img')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_guests');
    }
};
