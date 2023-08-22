<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Student::class)
                  ->constrained('students', 'reg')
                  ->nullable()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('profile_pic', 255)->nullable();

            $table->string('mobile_num', 11)->nullable();
            $table->string('additional_number', 11)->nullable();

            $table->string('name', 255)->notNullable();
            $table->string('name_bangla', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('father_name_bangla', 255)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->string('mother_name_bangla', 255)->nullable();
            $table->string('religion', 255)->nullable();
            $table->string('blood_group', 255)->nullable();;

            $table->string('district', 255)->nullable();
            $table->string('upazilla', 255)->nullable();
            $table->string('post', 255)->nullable();
            $table->string('village', 255)->nullable();

            $table->string('hall', 255)->nullable();
            $table->string('hall_attach_num')->nullable();
            $table->string('room_num')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
