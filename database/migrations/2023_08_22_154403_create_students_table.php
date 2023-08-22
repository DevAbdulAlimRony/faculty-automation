<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->string('reg', 255)->primary();
            $table->string('university_id', 255)->notNullable();

            $table->string('email', 255)->unique()->notNullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('password', 255);

            $table->foreignId('session_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
