<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class UpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach($posts as $post){
            $category_id = Category::inRandomOrder()->first()->id;
            // dump($category_id);

            $post->category_id = $category_id;
            $post->update();
        }
    }
}
