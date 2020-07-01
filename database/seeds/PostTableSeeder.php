<?php

use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::truncate();
        Category::truncate();
        Tag::truncate();
        User::truncate();


        $post = new Post;
        $post->title = "Mi primer post";
        $post->excerpt = "Extarcto de mi primer post";
        $post->body="<p>Contenido primer post</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi segundo post";
        $post->excerpt = "Extarcto de mi segundo post";
        $post->body="<p>Contenido segundo post</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category = 2;
        $post->save();

        $post = new Post;
        $post->title = "Mi tercer post";
        $post->excerpt = "Extarcto de mi tercer post";
        $post->body="<p>Contenido tercer post</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category = 1;
        $post->save();

        $post = new Post;
        $post->title = "Mi cuarto post";
        $post->excerpt = "Extarcto de mi cuarto post";
        $post->body="<p>Contenido cuarto post</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category = 2;
        $post->save();

        $category = new Category;
        $category->name = 'Categoria 1';
        $category->save();

        $category = new Category;
        $category->name = 'Categoria 2';
        $category->save();

        $tag = new Tag;
        $tag->name = 'Etiqueta 1';
        $tag->save();

        $tag = new Tag;
        $tag->name = 'Etiqueta 2';
        $tag->save();

        $user = new User;
        $user->name = "admin";
        $user->email = "admin@test.com";
        $user->password = bcrypt( 'admin' );
        $user->save();


    }
}
