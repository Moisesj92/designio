<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Tag;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
        $posts= Post::all();

        return view('admin.posts.index', compact('posts') );
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('admin.posts.create', compact('categories', 'tags'));
    }


    public function store(Request $request)
    {

        //Validacion

        $post = new Post;

        $post->title        = $request->get('title');
        $post->excerpt      = $request->get('excerpt');
        $post->body         = $request->get('body');
        $post->published_at = Carbon::parse( $request->get('published_at') );
        $post->category_id     = $request->get('category_id');
        $post->save();


        //Luego de guardar el post hay que guardar la relacion con los demas elementos
        $post->tags()->attach($request->get('tags'));

        return back()->with('flash', 'Felicidades tu publicación ha sido creada exitosamente');

    }

}
