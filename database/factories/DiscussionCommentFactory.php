<?php

namespace Database\Factories;

use App\Models\DiscussionComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscussionCommentFactory extends Factory
{
    protected $model = DiscussionComment::class;

    public function definition()
    {
        return [
            'discussion_id' => \App\Models\Discussion::factory(),
            'created_by' => \App\Models\User::factory(),
            'comment' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
