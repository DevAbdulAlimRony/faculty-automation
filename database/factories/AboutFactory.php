<?php
namespace Database\Factories;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

final class AboutFactory extends Factory
{
    protected $model = About::class;

    public function definition(): array
    {
        return [
            'title' => 'CSE in PSTU',
            'overview' => $this->faker->paragraph(1),
            'image' => null,
            'established' => $this->faker->year,
            'mission' => $this->faker->paragraph(1),
            'vision' => $this->faker->paragraph(1),
            'address' => $this->faker->address,
            'building' => $this->faker->sentence,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
        ];
    }
}
