<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiscussionComment extends Model
{
    use HasFactory;
    protected $fillable = ['discussion_id', 'created_by', 'comment'];

    public function discussion()
    {
        return $this->belongsTo(Discussion::class, 'discussion_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
