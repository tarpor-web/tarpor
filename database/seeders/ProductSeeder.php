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
                'sku' => 'IPHONE13',
                'name' => 'iPhone 13',
                'slug' => 'iphone-13',
                'description' => 'The latest iPhone with A15 Bionic chip.',
                'short_description' => 'Flagship smartphone from Apple.',
                'price' => 999.99,
                'sale_price' => 949.99,
                'cost_price' => 800.00,
                'stock_quantity' => 100,
                'stock_status' => 'in_stock',
                'tags' => json_encode(['smartphone', 'apple', 'flagship']),
                'related_products' => json_encode([2, 3]),
                'is_featured' => true,
                'barcode' => '1234567890123',
                'discount' => 5.00,
                'inventory_tracking' => true,
                'weight' => 0.17,
                'length' => 14.67,
                'width' => 7.15,
                'height' => 0.76,
                'brand_id' => 1,
                'attributes' => json_encode([
                    'color' => 'Midnight',
                    'storage' => '128GB'
                ]),
                'images' => json_encode([
                    'uploads/products/images/iphone13-1.jpg',
                    'uploads/products/images/iphone13-2.jpg'
                ]),
                'thumbnail' => 'uploads/products/thumbnails/iphone13-thumbnail.jpg',
                'status' => 'published',
            ],
            [
                'sku' => 'GALAXYS21',
                'name' => 'Galaxy S21',
                'slug' => 'galaxy-s21',
                'description' => 'Samsung flagship smartphone.',
                'short_description' => 'Powerful Android smartphone.',
                'price' => 899.99,
                'sale_price' => 849.99,
                'cost_price' => 700.00,
                'stock_quantity' => 150,
                'stock_status' => 'in_stock',
                'tags' => json_encode(['smartphone', 'samsung', 'android']),
                'related_products' => json_encode([1, 3]),
                'is_featured' => true,
                'barcode' => '2345678901234',
                'discount' => 10.00,
                'inventory_tracking' => true,
                'weight' => 0.17,
                'length' => 15.10,
                'width' => 7.20,
                'height' => 0.80,
                'brand_id' => 2,
                'attributes' => json_encode([
                    'color' => 'Phantom Gray',
                    'storage' => '128GB'
                ]),
                'images' => json_encode([
                    'uploads/products/images/galaxys21-1.jpg',
                    'uploads/products/images/galaxys21-2.jpg'
                ]),
                'thumbnail' => 'uploads/products/thumbnails/galaxys21-thumbnail.jpg',
                'status' => 'published',
            ],
            [
                'sku' => 'MACBOOKPRO',
                'name' => 'MacBook Pro',
                'slug' => 'macbook-pro',
                'description' => 'Powerful laptop for professionals.',
                'short_description' => 'Apple\'s professional laptop.',
                'price' => 1999.99,
                'sale_price' => 1899.99,
                'cost_price' => 1500.00,
                'stock_quantity' => 50,
                'stock_status' => 'in_stock',
                'tags' => json_encode(['laptop', 'apple', 'professional']),
                'related_products' => json_encode([1, 2]),
                'is_featured' => true,
                'barcode' => '3456789012345',
                'discount' => 0.00,
                'inventory_tracking' => true,
                'weight' => 1.4,
                'length' => 30.41,
                'width' => 21.24,
                'height' => 1.55,
                'brand_id' => 1,
                'attributes' => json_encode([
                    'color' => 'Space Gray',
                    'storage' => '512GB'
                ]),
                'images' => json_encode([
                    'uploads/products/images/macbookpro-1.jpg',
                    'uploads/products/images/macbookpro-2.jpg'
                ]),
                'thumbnail' => 'uploads/products/thumbnails/macbookpro-thumbnail.jpg',
                'status' => 'published',
            ],
            [
                'sku' => 'SURFACELAP4',
                'name' => 'Surface Laptop 4',
                'slug' => 'surface-laptop-4',
                'description' => 'Sleek and powerful Windows laptop.',
                'short_description' => 'Microsoft\'s flagship laptop.',
                'price' => 1299.99,
                'sale_price' => 1199.99,
                'cost_price' => 1000.00,
                'stock_quantity' => 75,
                'stock_status' => 'in_stock',
                'tags' => json_encode(['laptop', 'microsoft', 'windows']),
                'related_products' => json_encode([3, 5]),
                'is_featured' => true,
                'barcode' => '4567890123456',
                'discount' => 0.00,
                'inventory_tracking' => true,
                'weight' => 1.26,
                'length' => 30.80,
                'width' => 22.30,
                'height' => 1.57,
                'brand_id' => 4,
                'attributes' => json_encode([
                    'color' => 'Platinum',
                    'storage' => '256GB'
                ]),
                'images' => json_encode([
                    'uploads/products/images/surfacelap4-1.jpg',
                    'uploads/products/images/surfacelap4-2.jpg'
                ]),
                'thumbnail' => 'uploads/products/thumbnails/surfacelap4-thumbnail.jpg',
                'status' => 'published',
            ],
            [
                'sku' => 'PS5',
                'name' => 'PlayStation 5',
                'slug' => 'playstation-5',
                'description' => 'Next-gen gaming console.',
                'short_description' => 'Sony\'s latest gaming console.',
                'price' => 499.99,
                'sale_price' => 479.99,
                'cost_price' => 400.00,
                'stock_quantity' => 200,
                'stock_status' => 'in_stock',
                'tags' => json_encode(['gaming', 'console', 'sony']),
                'related_products' => json_encode([6, 7]),
                'is_featured' => true,
                'barcode' => '5678901234567',
                'discount' => 0.00,
                'inventory_tracking' => true,
                'weight' => 4.5,
                'length' => 39.0,
                'width' => 26.0,
                'height' => 10.4,
                'brand_id' => 3,
                'attributes' => json_encode([
                    'color' => 'White',
                    'storage' => '825GB'
                ]),
                'images' => json_encode([
                    'uploads/products/images/ps5-1.jpg',
                    'uploads/products/images/ps5-2.jpg'
                ]),
                'thumbnail' => 'uploads/products/thumbnails/ps5-thumbnail.jpg',
                'status' => 'published',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
