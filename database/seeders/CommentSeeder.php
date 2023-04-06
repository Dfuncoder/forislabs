<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            Comment::factory()->count(3)->hasChildren(3, ['post_id' => $post->id])->create(['post_id' => $post->id]);
        }
    }
}
