<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    const EXCERPT_LENGTH = 50;
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // protected $guarded = ['id'];
    public function excerpt()
    {
        return Str::limit($this->description, Post::EXCERPT_LENGTH);
    }
}
