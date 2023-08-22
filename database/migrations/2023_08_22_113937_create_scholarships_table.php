<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('purpose');
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->string('provided_by');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
