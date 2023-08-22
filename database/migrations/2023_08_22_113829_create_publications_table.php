<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            $table->enum('type', ['research paper', 'journal', 'conference', 'book', 'magazine', 'encyclopedia', 'handbook', 'other']);
            $table->string('supervised_by')->nullable();
            $table->date('published_date');
            $table->string('published_by');
            $table->text('abstract')->nullable();
            $table->text('summary')->nullable();
            $table->string('paper_link')->nullable();
            $table->string('image')->nullable();
            $table->string('keywords')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('publicationable_id');
            $table->string('publicationable_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
