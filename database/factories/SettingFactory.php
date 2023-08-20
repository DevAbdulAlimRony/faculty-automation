<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

final class SettingFactory extends Factory
{
    protected $model = Setting::class;

    public function definition(): array
    {
        return [
            'favicon' => 'http://pstu.ac.bd/banner/pstulogo.jpg',
            'logo' => 'http://pstu.ac.bd/banner/pstulogo.jpg',
            'title' => 'CSE PSTU',
            'short_name' => 'CSE PSTU',
            'author' => 'Patuakhali Science and Technology University',
            'description' => $this->faker->optional()->text,
            'keywords' => 'Patuakhali Science and Technology University, cse pstu, pstu cse faculty, cse examples, cse requirements, computer science and engineering faculty, computer science and engineering in pstu',
            'welcome-title' => 'Faculty of Computer Science and Engineering',
            'video' => null,
            'cse_club_link' => 'https://www.facebook.com/CSEClubPSTU/',
            'admission_link' => 'https://admission.pstu.ac.bd/',
        ];
    }
}
