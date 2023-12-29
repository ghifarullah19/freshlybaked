<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Muhammad Lutfi",
            'username' => "ghifarullah",
            'email' => "ghifarullah@email.com",
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        Category::create([
            'name' => 'Cake',
            'slug' => 'cake'
        ]);

        Category::create([
            'name' => 'Bread',
            'slug' => 'bread'
        ]);

        Category::create([
            'name' => 'Signature',
            'slug' => 'signature'
        ]);

        Category::create([
            'name' => 'Side',
            'slug' => 'side'
        ]);

        User::factory(3)->create();
        Menu::factory(10)->create();
    }
}
