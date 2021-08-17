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

    /*public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('admin.posts.create', compact('categories', 'tags'));
    }*/

    public function store (Request $request)
    {
        $this->validate($request, ['title' => 'required']);


        $post = Post::create([
            'title' => $request->input('title'),
            'url' => str::slug($request->input('title'))
        ]);

        return redirect()->route('admin.posts.edit', $post);

    }

    public function edit (Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post, Request $request)
    {

        //Validacion
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required'
        ]);

        $post->title        = $request->input('title');
        $post->url          = Str::slug( $request->input('title') );
        $post->excerpt      = $request->input('excerpt');
        $post->body         = $request->input('body');
        $post->published_at = ($request->input('published_at') == null ) ? null : Carbon::parse( $request->input('published_at') );
        $post->category_id  = $request->input('category_id');
        $post->save();


        //Luego de guardar el post hay que guardar la relacion con los demas elementos
        $post->tags()->sync($request->input('tags'));

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'Felicidades tu publicación ha sido guardada exitosamente');

    }

}
