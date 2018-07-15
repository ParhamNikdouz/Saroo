<?php

namespace App\Post;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $guarded = [];
    protected $table = 'post_comments';
}
