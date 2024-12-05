<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'Programming'],
            ['name' => 'Algorithms'],
            ['name' => 'Data Structures'],
            ['name' => 'Web Development'],
            ['name' => 'Machine Learning'],
            ['name' => 'Artificial Intelligence'],
            ['name' => 'Cybersecurity'],
            ['name' => 'Networking'],
            ['name' => 'Databases'],
            ['name' => 'Software Engineering']
        ];

        DB::table('tags')->insert($tags);
    }
}
