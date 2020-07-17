<?php

use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

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
        $post->title = "1 Lorem ipsum dolor sit amet.";
        $post->url = str::slug("1 Lorem ipsum dolor sit amet.");
        $post->excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien nibh, elementum in tellus nec.";
        $post->body="<p>mauris. Pellentesque posuere tellus eu purus hendrerit, tempor eleifend ligula condimentum. Suspendisse sit amet est nec neque fermentum convallis sit amet sit amet urna. Proin ullamcorper ipsum sit amet felis facilisis, ac suscipit mauris hendrerit. Fusce imperdiet lorem et metus fringilla scelerisque. Praesent pellentesque pharetra tempus. Sed non suscipit turpis, id ullamcorper odio.</p>";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create( ['name'=>'etiqueta Lorem'] ));

        $post = new Post;
        $post->title = "2 Lorem ipsum dolor sit amet.";
        $post->url = str::slug("2 Lorem ipsum dolor sit amet.");
        $post->excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien nibh, elementum in tellus nec.";
        $post->body="<p>eleifend ligula condimentum. Suspendisse sit amet est nec neque fermentum convallis sit amet sit amet urna. Proin ullamcorper ipsum sit amet felis facilisis, ac suscipit mauris hendrerit. Fusce imperdiet lorem et metus fringilla scelerisque. Praesent pellentesque pharetra tempus. Sed non suscipit turpis, id ullamcorper odio.</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create( ['name'=>'etiqueta Ipsum'] ));

        $post = new Post;
        $post->title = "3 Lorem ipsum dolor sit amet.";
        $post->url = str::slug("3 Lorem ipsum dolor sit amet.");
        $post->excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien nibh, elementum in tellus nec.";
        $post->body="<p>purus hendrerit, tempor eleifend ligula condimentum. Suspendisse sit amet est nec neque fermentum convallis sit amet sit amet urna. Proin ullamcorper ipsum sit amet felis facilisis, ac suscipit mauris hendrerit. Fusce imperdiet lorem et metus fringilla scelerisque. Praesent pellentesque pharetra tempus. Sed non suscipit turpis, id ullamcorper odio.</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create( ['name'=>'etiqueta dolor'] ));

        $post = new Post;
        $post->title = "4 Lorem ipsum dolor sit amet.";
        $post->url = str::slug("4 Lorem ipsum dolor sit amet.");
        $post->excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien nibh, elementum in tellus nec.";
        $post->body="<p>tum convallis sit amet sit amet urna. Proin ullamcorper ipsum sit amet felis facilisis, ac suscipit mauris hendrerit. Fusce imperdiet lorem et metus fringilla scelerisque. Praesent pellentesque pharetra tempus. Sed non suscipit turpis, id ullamcorper odio.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create( ['name'=>'etiqueta sit'] ));

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
