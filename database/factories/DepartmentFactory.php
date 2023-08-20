<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Department>
 */
final class DepartmentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Department::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'block_id' => \App\Models\Block::factory(),
            'floor_id' => \App\Models\Floor::factory(),
            'short_name' => fake()->word,
            'name' => fake()->name,
        ];
    }
}
