<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


final class EventFactory extends Factory
{

    protected $model = Event::class;

    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('+1 week', '+2 months');
        $endDate = Carbon::parse($startDate)->addDays(random_int(1, 7));

        return [
            'title' => $this->faker->sentence,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'event_type_id' => \App\Models\Event::factory(),
            'place' => $this->faker->city,
            'start_time' => $this->faker->time('H:i:s'),
            'end_time' => $this->faker->time('H:i:s'),
            'about' => $this->faker->paragraph,
            'registration_link' => $this->faker->optional()->url,
            'facebook_link' => $this->faker->optional()->randomElement([$this->faker->url('https://facebook.com'), null]),
        ];
    }
}
