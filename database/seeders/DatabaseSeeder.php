<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Event;
use App\Models\Setting;
use App\Models\EventType;
use App\Models\EventGuest;
use App\Models\Scholarship;
use App\Models\Collaboration;
use Illuminate\Database\Seeder;

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
        EventType::factory(5)->has(Event::factory(2))->create();
        // ->has(EventGuest::factory(3)))->create();
        // Event::factory(1)->has(EventGuest::factory(3))->create();

        // $students = Student::factory(5000)->make();
        // $students->chunk(500)->each(function($chunk){
        //     Student::insert($chunk->toArray());
        // });
        // DB::statement("update students set created_at= now");

        Scholarship::factory(3)->create();
        Collaboration::factory(5)->create();
    }
}
