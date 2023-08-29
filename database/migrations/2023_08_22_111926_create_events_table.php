<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');

            $table->foreignId('event_type_id')
                  ->constrained()
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->string('place');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->text('about');
            $table->string('registration_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
