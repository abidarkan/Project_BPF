<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'role', // Added role attribute
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relationships

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'created_by');
    }

    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'created_by');
    }

    public function comments()
    {
        return $this->hasMany(DiscussionComment::class, 'created_by');
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
