<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() // Foreign key => user_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
