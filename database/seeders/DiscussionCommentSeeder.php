<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiscussionComment;
use App\Models\Discussion;

class DiscussionCommentSeeder extends Seeder
{
    public function run()
    {
        $discussions = Discussion::all();

        $discussions->each(function ($discussion) {
            DiscussionComment::factory()->count(5)->create(['discussion_id' => $discussion->id]);
        });
    }
}
