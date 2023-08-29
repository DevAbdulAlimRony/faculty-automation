<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\EventGuest;
use Illuminate\Database\Eloquent\Factories\Factory;

final class EventGuestFactory extends Factory
{

    protected $model = EventGuest::class;

    public function definition(): array
    {
        return [
            'event_id' => \App\Models\Event::factory(),
            'name' => $this->faker->name,
            'profession' => $this->faker->optional()->word,
            'company' => $this->faker->optional()->company,
            'img' => $this->faker->optional()->imageUrl(),
        ];
    }
}
