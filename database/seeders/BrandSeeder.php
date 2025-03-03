<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'slug' => 'apple', 'status' => 'active'],
            ['name' => 'Samsung', 'slug' => 'samsung', 'status' => 'active'],
            ['name' => 'Sony', 'slug' => 'sony', 'status' => 'active'],
            ['name' => 'Microsoft', 'slug' => 'microsoft', 'status' => 'active'],
            ['name' => 'Google', 'slug' => 'google', 'status' => 'active'],
            ['name' => 'LG', 'slug' => 'lg', 'status' => 'active'],
            ['name' => 'HP', 'slug' => 'hp', 'status' => 'active'],
            ['name' => 'Dell', 'slug' => 'dell', 'status' => 'active'],
            ['name' => 'Lenovo', 'slug' => 'lenovo', 'status' => 'active'],
            ['name' => 'Asus', 'slug' => 'asus', 'status' => 'active'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
