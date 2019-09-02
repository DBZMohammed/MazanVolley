<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }



}
