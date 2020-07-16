<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Tag;

use Carbon\Carbon;
use Illuminate\Support\Str;

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

    public function store (Request $request)
    {
        $this->validate($request, ['title' => 'required']);


        $post = Post::create([
            'title' => $request->get('title'),
            'url' => str::slug($request->get('title'))
        ]);

        return redirect()->route('admin.posts.edit', $post);

    }

    public function edit (Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /* public function store(Request $request)
    {

        //Validacion
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required'
        ]);


        $post = new Post;

        $post->title        = $request->get('title');
        $post->url          = Str::slug( $request->get('title') );
        $post->excerpt      = $request->get('excerpt');
        $post->body         = $request->get('body');
        $post->published_at = ($request->get('published_at') == null ) ? null : Carbon::parse( $request->get('published_at') );
        $post->category_id     = $request->get('category_id');
        $post->save();


        //Luego de guardar el post hay que guardar la relacion con los demas elementos
        $post->tags()->attach($request->get('tags'));

        return back()->with('flash', 'Felicidades tu publicación ha sido creada exitosamente');

    } */

}
