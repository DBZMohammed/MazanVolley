<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PostsHsTag extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

}
