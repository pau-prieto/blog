<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the initial admin user
        User::factory()->admin()->create();

        // Create additional users with random roles
        $users = User::factory(5)->create();


        // Create posts assigned only to authors
        $users->each(function ($user) {
            if ($user->role === 'author') {
                Post::factory(10)->create(['user_id' => $user->id]);
            }
        });

        // // Create additional users with random roles (user/author) and posts
        // User::factory(5)
        // ->has(Post::factory(10))
        // ->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$this->call(PostSeeder::class);
    }
}
