<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Batik',
            'slug' => 'batik'
        ]);
        Category::create([
            'name' => 'Lukisan',
            'slug' => 'lukisan'
        ]);
        Category::create([
            'name' => 'Vas',
            'slug' => 'vas'
        ]);

        Product::factory(20)->create();


        // User::create([
        //     'name' => 'PaulKusuma',
        //     'email' => 'paul@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // User::create([
        //     'name' => 'Verda',
        //     'email' => 'Verda@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // User::create([
        //     'name' => 'wijaya',
        //     'email' => 'wijaya@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // Product::create([
        //     'name' => 'Vas Bunga',
        //     'slug' => 'vas-bunga',
        //     'description' => 'APA APA ANNN',
        //     'price' => '20000',
        //     'category_id' => '3',
        //     'user_id' => '1'
        // ]);
        // Product::create([
        //     'name' => 'Vas Gelas',
        //     'slug' => 'vas-gelas',
        //     'description' => 'APA APA ANNN',
        //     'price' => '20000',
        //     'category_id' => '3',
        //     'user_id' => '3'
        // ]);
        // Product::create([
        //     'name' => 'Batik Kawung',
        //     'slug' => 'batik-kawung',
        //     'description' => 'APA APA ANNN',
        //     'price' => '200000',
        //     'category_id' => '1',
        //     'user_id' => '2'
        // ]);
    }
}