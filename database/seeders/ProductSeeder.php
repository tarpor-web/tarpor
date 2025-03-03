<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'sku' => 'IPHONE13', // Add a unique SKU
                'name' => 'iPhone 13',
                'slug' => 'iphone-13',
                'description' => 'The latest iPhone with A15 Bionic chip.',
                'price' => 999.99,
                'category_id' => 1,
                'brand_id' => 1,
                'status' => 'published',
            ],
            [
                'sku' => 'GALAXYS21', // Add a unique SKU
                'name' => 'Galaxy S21',
                'slug' => 'galaxy-s21',
                'description' => 'Samsung flagship smartphone.',
                'price' => 899.99,
                'category_id' => 1,
                'brand_id' => 2,
                'status' => 'published',
            ],
            [
                'sku' => 'MACBOOKPRO', // Add a unique SKU
                'name' => 'MacBook Pro',
                'slug' => 'macbook-pro',
                'description' => 'Powerful laptop for professionals.',
                'price' => 1999.99,
                'category_id' => 2,
                'brand_id' => 1,
                'status' => 'published',
            ],
            [
                'sku' => 'SURFACELAP4', // Add a unique SKU
                'name' => 'Surface Laptop 4',
                'slug' => 'surface-laptop-4',
                'description' => 'Sleek and powerful Windows laptop.',
                'price' => 1299.99,
                'category_id' => 2,
                'brand_id' => 4,
                'status' => 'published',
            ],
            [
                'sku' => 'PS5', // Add a unique SKU
                'name' => 'PlayStation 5',
                'slug' => 'playstation-5',
                'description' => 'Next-gen gaming console.',
                'price' => 499.99,
                'category_id' => 8,
                'brand_id' => 3,
                'status' => 'published',
            ],
            [
                'sku' => 'XBOXSERIESX', // Add a unique SKU
                'name' => 'Xbox Series X',
                'slug' => 'xbox-series-x',
                'description' => 'Powerful gaming console from Microsoft.',
                'price' => 499.99,
                'category_id' => 8,
                'brand_id' => 4,
                'status' => 'published',
            ],
            [
                'sku' => 'SONYWH1000XM4', // Add a unique SKU
                'name' => 'Sony WH-1000XM4',
                'slug' => 'sony-wh-1000xm4',
                'description' => 'Noise-cancelling headphones.',
                'price' => 349.99,
                'category_id' => 6,
                'brand_id' => 3,
                'status' => 'published',
            ],
            [
                'sku' => 'CANONEOSR5', // Add a unique SKU
                'name' => 'Canon EOS R5',
                'slug' => 'canon-eos-r5',
                'description' => 'Professional mirrorless camera.',
                'price' => 3899.99,
                'category_id' => 5,
                'brand_id' => 5,
                'status' => 'published',
            ],
            [
                'sku' => 'LGOLEDCX', // Add a unique SKU
                'name' => 'LG OLED CX',
                'slug' => 'lg-oled-cx',
                'description' => '4K OLED TV with stunning picture quality.',
                'price' => 1999.99,
                'category_id' => 4,
                'brand_id' => 6,
                'status' => 'published',
            ],
            [
                'sku' => 'APPLEWATCH7', // Add a unique SKU
                'name' => 'Apple Watch Series 7',
                'slug' => 'apple-watch-series-7',
                'description' => 'Latest smartwatch from Apple.',
                'price' => 399.99,
                'category_id' => 7,
                'brand_id' => 1,
                'status' => 'published',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
