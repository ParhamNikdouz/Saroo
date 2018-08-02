<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function posts()
    {
        return view('/post/posts');
    }
    public function singlePost()
    {
        return view('/post/singlePost');
    }
    public function PlainPage()
    {
        return view('/panel/PlainPage');
    }
}
