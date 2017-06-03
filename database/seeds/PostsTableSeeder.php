<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 100)->create();

        $categories = Category::pluck('id')->all();
        $faker = \Faker\Factory::create();

        foreach ($posts as $key => $post) {
        	
        	$arr = $faker->randomElements($categories, 4);
            //$arr = [12];
        	$post->categories()->sync($arr);
        }
    }
}
