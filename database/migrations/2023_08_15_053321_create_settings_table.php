<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('favicon')
                ->default('http://pstu.ac.bd/banner/pstulogo.jpg');
            $table->string('logo')
                ->default('http://pstu.ac.bd/banner/pstulogo.jpg');

            $table->string('title')
                ->default('CSE PSTU');
            $table->string('short_name')
                ->default('cse pstu');

            $table->string('author')
                ->default('Patuakhali Science and Technology University');
            $table->text('description')->nullable();

            $table->string('keywords')
                ->default('Patuakhali Science and Technology University, cse pstu, pstu cse faculty, cse examples, cse requirements, computer science and engineering faculty, computer science and engineering in pstu');

            $table->string('welcome-title')
                ->default('Faculty of Computer Science and Engineering');
            $table->string('video')->nullable();

            $table->string('cse_club_link')
                ->default('https://www.facebook.com/CSEClubPSTU/');
            $table->string('admission_link')
                ->default('https://admission.pstu.ac.bd/');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
