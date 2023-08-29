<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Event;
use App\Models\Collaboration;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CollaborationFactory extends Factory
{

    protected $model = Collaboration::class;

    public function definition(): array
    {
        return [
            'collaborator' => $this->faker->company,
            'collaborator_logo' => $this->faker->optional()->url,
            'event_id' => Event::factory(),
        ];
    }
}
