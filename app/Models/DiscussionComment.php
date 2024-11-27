<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscussionComment extends Model
{
    public function discussion()
    {
        return $this->belongsTo(Discussion::class, 'discussion_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
