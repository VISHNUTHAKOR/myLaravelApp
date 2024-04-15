<?php

namespace Database\Seeders;

use App\Models\Blog;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'vishnu thakor',
            'email' => 'vishnuthakor@gmail.com',
            'id' => 1,
            'password' => bcrypt(123456)
        ]);

        Blog::factory(100)->create();
    }
}
