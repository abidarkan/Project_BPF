<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discussion extends Model
{
    use HasFactory;
    protected $fillable = ['created_by', 'title', 'content'];

    public function comments()
    {
        return $this->hasMany(DiscussionComment::class, 'discussion_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'discussion_tag', 'discussion_id', 'tag_id');
    }
}
