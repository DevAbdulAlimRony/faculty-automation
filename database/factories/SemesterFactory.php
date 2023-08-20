<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Semester>
 */
final class SemesterFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Semester::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'semester_num' => fake()->randomNumber(),
            'session_id' => \App\Models\Session::factory(),
        ];
    }
}
