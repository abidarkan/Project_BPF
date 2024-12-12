<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Intro to AI',
            'description' => 'An introductory workshop on Artificial Intelligence and its applications.',
            'date' => Carbon::parse('2023-12-15'),
            'time' => Carbon::parse('09:00:00')->format('H:i:s'),
            'location' => 'Room 101, Main Building',
        ]);

        Event::create([
            'title' => 'Web Development Bootcamp',
            'description' => 'A comprehensive bootcamp on modern web development techniques.',
            'date' => Carbon::parse('2023-12-18'),
            'time' => Carbon::parse('10:30:00')->format('H:i:s'),
            'location' => 'Room 202, Tech Building',
        ]);

        Event::create([
            'title' => 'Data Science Symposium',
            'description' => 'A symposium discussing the latest trends in Data Science.',
            'date' => Carbon::parse('2023-12-20'),
            'time' => Carbon::parse('14:00:00')->format('H:i:s'),
            'location' => 'Auditorium, Research Center',
        ]);

        // You can add more events as needed
    }
}

