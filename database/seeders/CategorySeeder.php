<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smartphones', 'status' => 'active'],
            ['name' => 'Laptops', 'status' => 'active'],
            ['name' => 'Tablets', 'status' => 'active'],
            ['name' => 'TVs', 'status' => 'active'],
            ['name' => 'Cameras', 'status' => 'active'],
            ['name' => 'Headphones', 'status' => 'active'],
            ['name' => 'Smartwatches', 'status' => 'active'],
            ['name' => 'Gaming Consoles', 'status' => 'active'],
            ['name' => 'Printers', 'status' => 'active'],
            ['name' => 'Accessories', 'status' => 'active'],
        ];

        foreach ($categories as $category) {
            // Dynamically generate the slug
            $slug = Str::slug($category['name']) . '-' . uniqid();

            // Create the category with the unique slug
            Category::create([
                'name' => $category['name'],
                'slug' => $slug,
                'status' => $category['status'],
            ]);
        }

        // For each of the categories, create subcategories
        foreach (Category::all() as $category) {
            for ($i = 1; $i <= 3; $i++) { // Create 3 subcategories
                $subcategoryName = $category->name . ' Subcategory ' . $i;
                $slug = Str::slug($subcategoryName) . '-' . uniqid();

                // Create subcategory with the parent category
                Category::create([
                    'name' => $subcategoryName,
                    'slug' => $slug,
                    'status' => 'active',
                    'parent_id' => $category->id,
                ]);
            }
        }

        // For each subcategory, create more sub-subcategories
        foreach (Category::whereNotNull('parent_id')->get() as $subcategory) {
            for ($i = 1; $i <= 3; $i++) { // Create 3 more sub-subcategories
                $subSubCategoryName = $subcategory->name . ' Subcategory ' . $i;
                $slug = Str::slug($subSubCategoryName) . '-' . uniqid();

                // Create sub-subcategory with the parent subcategory
                Category::create([
                    'name' => $subSubCategoryName,
                    'slug' => $slug,
                    'status' => 'active',
                    'parent_id' => $subcategory->id,
                ]);
            }
        }
    }
}
