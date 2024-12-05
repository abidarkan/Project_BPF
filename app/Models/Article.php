<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = ['title', 'content', 'author_id'];

    /**
     * Get the user that created the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
