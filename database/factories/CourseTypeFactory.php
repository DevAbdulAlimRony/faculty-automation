<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\CourseType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\CourseType>
 */
final class CourseTypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = CourseType::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'category' => fake()->word,
        ];
    }
}
