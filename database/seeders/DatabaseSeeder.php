<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'username' => 'tester',
            'email' => 'test@example.com',
        ]);

        $post = Post::factory(10)->create([
            'user_id' => $user->id,
        ]);
        Comment::factory(20)->create([
            'post_id' => rand(1, 10),
        ]);
    }
}
