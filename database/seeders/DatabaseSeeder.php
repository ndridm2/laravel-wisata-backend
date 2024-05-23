<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'FIC17 Andri',
            'email' => 'andri@fic17.com',
            'password' => Hash::make('12345678'),
        ]);

        // category factory 2
        Category::factory(2)->create();

        // product
        Product::factory(50)->create();
    }
}
