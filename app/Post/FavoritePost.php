<?php

namespace App\Post;

use Illuminate\Database\Eloquent\Model;

class FavoritePost extends Model
{
    protected $guarded = [];
    protected $table = 'favorite_post';
}
