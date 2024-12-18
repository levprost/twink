<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PostSeeder; 
use Database\Seeders\RoleSeeder; 
use Database\Seeders\UserSeeder; 
use Database\Seeders\CommentSeeder; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([ 
            RoleSeeder::class, 
            UserSeeder::class, 
            PostSeeder::class, 
            CommentSeeder::class,
        ]);
    }
}
