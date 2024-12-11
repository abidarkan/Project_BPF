<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discussion;

class DiscussionSeeder extends Seeder
{
    public function run()
    {
        // Generate 20 discussions with random data
        Discussion::factory()->count(20)->create();
    }
}

