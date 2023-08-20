<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Session>
 */
final class SessionFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Session::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'years' => fake()->word,
            'batch_number' => fake()->randomNumber(),
            'batch_name' => fake()->optional()->word,
        ];
    }
}
