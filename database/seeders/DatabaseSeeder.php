<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\About;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //Clean up All Tables
        Setting::truncate();
        About::truncate();

        //Seed From Factory Classes
        Setting::factory(1)->create();
        About::factory(1)->create();
    }
}
