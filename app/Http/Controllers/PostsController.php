<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function show(Post $post){

        return view('posts.show', compact('post'));

    }
}
