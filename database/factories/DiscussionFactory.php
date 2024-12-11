<?php

namespace Database\Factories;

use App\Models\Discussion;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscussionFactory extends Factory
{
    protected $model = Discussion::class;

    public function definition()
    {
        $topics = [
            'The Impact of AI on Society',
            'Best Practices for Remote Work',
            'Sustainable Living: Tips and Tricks',
            'The Future of Renewable Energy',
            'Mental Health Awareness and Support'
        ];

        return [
            'title' => $this->faker->randomElement($topics),
            'content' => $this->faker->paragraphs(3, true),
            'created_by' => \App\Models\User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

