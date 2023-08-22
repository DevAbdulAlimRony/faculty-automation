<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('notice_templates', function (Blueprint $table) {
            $table->id();
            $table->string('template_for');
            $table->enum('template_type', ['word_file', 'google_docs_link'])->default('word_file');
            $table->string('word_file')->nullable();
            $table->string('google_docs_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notice_templates');
    }
};
