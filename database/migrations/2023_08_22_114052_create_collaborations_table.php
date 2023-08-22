<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Event;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('collaborations', function (Blueprint $table) {
            $table->id();
            $table->string('collaborator');
            $table->string('collaborator_logo')->nullable();

            $table->foreignIdFor(Event::class)
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collaborations');
    }
};
