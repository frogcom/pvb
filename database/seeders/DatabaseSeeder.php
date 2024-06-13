<?php

namespace Database\Seeders;

use App\Models\Category;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        Category::create([
            'name' => 'Sport'
        ]);
        Category::create([
            'name' => 'Muziek'
        ]);
        Category::create([
            'name' => 'Media maken'
        ]);
        Category::create([
            'name' => 'Divers'
        ]);
        Category::create([
            'name' => 'Fashion'
        ]);
    }
}
