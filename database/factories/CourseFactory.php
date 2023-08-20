<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Course>
 */
final class CourseFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Course::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'credit' => fake()->randomFloat(),
            'semester_id' => \App\Models\Semester::factory(),
            'department_id' => \App\Models\Department::factory(),
            'course_type_id' => fake()->randomNumber(),
            'course_type_id' => \App\Models\CourseType::factory(),
        ];
    }
}
