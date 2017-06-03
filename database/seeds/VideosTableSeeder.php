<?php

use Illuminate\Database\Seeder;
use App\Models\Video;
use App\Models\Category;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = factory(Video::class, 20)->create();
        $categories = Category::pluck('id')->all();
        $faker = \Faker\Factory::create();

        foreach ($videos as $key => $video) {
        	
        	$arr = $faker->randomElements($categories, 4);
        	$video->categories()->sync($arr);
        }
    }
}
