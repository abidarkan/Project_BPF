<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Ensure the table name is explicitly defined if it's not the plural of the model name
    protected $table = 'articles'; 

    protected $fillable = ['title', 'content'];
}
