<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Show the requested post
     * @method show
     *
     * @return   view
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
