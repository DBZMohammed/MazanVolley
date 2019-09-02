<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function comments()
    {
        return $this
        ->hasMany(Comment::class)
        ->orderBy('created_at','DESC');
    }
}

