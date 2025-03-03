<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smartphones', 'slug' => 'smartphones', 'status' => 'active'],
            ['name' => 'Laptops', 'slug' => 'laptops', 'status' => 'active'],
            ['name' => 'Tablets', 'slug' => 'tablets', 'status' => 'active'],
            ['name' => 'TVs', 'slug' => 'tvs', 'status' => 'active'],
            ['name' => 'Cameras', 'slug' => 'cameras', 'status' => 'active'],
            ['name' => 'Headphones', 'slug' => 'headphones', 'status' => 'active'],
            ['name' => 'Smartwatches', 'slug' => 'smartwatches', 'status' => 'active'],
            ['name' => 'Gaming Consoles', 'slug' => 'gaming-consoles', 'status' => 'active'],
            ['name' => 'Printers', 'slug' => 'printers', 'status' => 'active'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'status' => 'active'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
