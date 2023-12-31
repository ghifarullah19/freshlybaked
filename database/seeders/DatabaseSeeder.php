<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Database\Seeder;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "Muhammad Lutfi",
            'username' => "ghifarullah",
            'email' => "ghifarullah@email.com",
            'password' => bcrypt('password'),
            'address' => 'Jl. Sariwangi Dalam 28 Blok 23/64, Bandung',
            'date_of_birth' => DateTime::createFromFormat('d-m-Y', '11-10-2002'),
            'phone_number' => '081222024097',
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

        Menu::create([
            'name' => 'Chocolate Trufle Cake',
            'slug' => 'chocolate-trufle-cake',
            'description' => 'Chocolate Trufle Cake',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/1.jpg'
        ]);

        Menu::create([
            'name' => 'Cold Chesse Cake',
            'slug' => 'cold-chesse-cake',
            'description' => 'Cold Chesse Cake',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/2.jpg'
        ]);

        Menu::create([
            'name' => 'Chocolate Trufle',
            'slug' => 'chocolate-trufle',
            'description' => 'Chocolate Trufle',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/3.jpg'
        ]);

        Menu::create([
            'name' => 'Chocolate Macaroon',
            'slug' => 'chocolate-macaroon',
            'description' => 'Chocolate Macaroon',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/6.jpg'
        ]);

        Menu::create([
            'name' => 'Glutinous Rice n Chocolate Cake',
            'slug' => 'glutinous-rice-n-chocolate-cake',
            'description' => 'Glutinous Rice n Chocolate Cake',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/7.jpg'
        ]);

        Menu::create([
            'name' => 'Strawberry Dessert',
            'slug' => 'strawberry-dessert',
            'description' => 'Strawberry Dessert',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/16.jpg'
        ]);

        Menu::create([
            'name' => 'Molten',
            'slug' => 'molten',
            'description' => 'Molten',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/17.jpg'
        ]);

        Menu::create([
            'name' => 'Strawberry Cake',
            'slug' => 'strawberry-cake',
            'description' => 'Strawberry Cake',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 1,
            'image' => 'menu-images/18.jpg'
        ]);

        Menu::create([
            'name' => 'Sausage Puff Rolled',
            'slug' => 'sausage-puff-rolled',
            'description' => 'Sausage Puff Rolled',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/4.jpg'
        ]);

        Menu::create([
            'name' => 'Croissant',
            'slug' => 'croissant',
            'description' => 'Croissant',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/8.jpg'
        ]);

        Menu::create([
            'name' => 'Pain Au Chocolat',
            'slug' => 'pain-au-chocolat',
            'description' => 'Pain Au Chocolat',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/9.jpg'
        ]);

        Menu::create([
            'name' => 'Pretzels',
            'slug' => 'pretzels',
            'description' => 'Pretzels',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/10.jpg'
        ]);

        Menu::create([
            'name' => 'Baguette',
            'slug' => 'baguette',
            'description' => 'Baguette',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/11.jpg'
        ]);

        Menu::create([
            'name' => 'Raisin Muffin',
            'slug' => 'raisin-muffin',
            'description' => 'Raisin Muffin',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/13.jpg'
        ]);

        Menu::create([
            'name' => 'Tiger Roll Bread',
            'slug' => 'tiger-roll-bread',
            'description' => 'Tiger Roll Bread',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/14.jpg'
        ]);

        Menu::create([
            'name' => 'Tiger Bread',
            'slug' => 'tiger-bread',
            'description' => 'Tiger Bread',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/15.jpg'
        ]);

        Menu::create([
            'name' => 'Corn Bread Sandwich',
            'slug' => 'corn-bread-sandwich',
            'description' => 'Corn Bread Sandwich',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/23.jpg'
        ]);

        Menu::create([
            'name' => 'Bahn mi Bread',
            'slug' => 'bahn-mi-bread',
            'description' => 'Bahn mi Bread',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 2,
            'image' => 'menu-images/26.jpg'
        ]);

        Menu::create([
            'name' => 'Chocolate Showpiece',
            'slug' => 'chocolate-showpiece',
            'description' => 'Chocolate Showpiece',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 3,
            'image' => 'menu-images/12.jpg'
        ]);

        Menu::create([
            'name' => 'Chocolate Showpiece: The Dragon',
            'slug' => 'chocolate-showpiece-dragon',
            'description' => 'Chocolate Showpiece: The Dragon',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 3,
            'image' => 'menu-images/22.jpg'
        ]);

        Menu::create([
            'name' => 'Bread Showpiece: Ramadhan',
            'slug' => 'bread-showpiece-ramadhan',
            'description' => 'Bread Showpiece: Ramadhan',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 3,
            'image' => 'menu-images/24.jpg'
        ]);

        Menu::create([
            'name' => 'Bread Showpiece: Gong Xi Fa Cai',
            'slug' => 'bread-showpiece-gong-xi-fa-cai',
            'description' => 'Bread Showpiece: Gong Xi Fa Cai',
            'price' => 50000,
            'quantity' => 1,
            'category_id' => 3,
            'image' => 'menu-images/25.jpg'
        ]);
    }
}
