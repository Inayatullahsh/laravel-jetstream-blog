<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Category extends Model
{
    use HasFactory;

    
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subcategory()
    {
        return $this->hasMany(::class, 'parent_id');
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
