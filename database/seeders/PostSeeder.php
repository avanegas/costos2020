<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(30)->create();

        foreach ($posts as $post){
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
            $post->tags()->attach([
                rand(1,4),
                rand(5,8),
                rand(9,12)
            ]);
        }
    }
}
