<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Factories\Factory;

final class ScholarshipFactory extends Factory
{
    protected $model = Scholarship::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'purpose' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'requirements' => $this->faker->paragraph,
            'provided_by' => $this->faker->company,
        ];
    }
}
