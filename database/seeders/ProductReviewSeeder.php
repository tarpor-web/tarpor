<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all existing product and user IDs
        $productIds = Product::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        // Ensure there are products and users before inserting reviews
        if (empty($productIds) || empty($userIds)) {
            $this->command->warn('Skipping ProductReviewSeeder: No products or users found.');
            return;
        }

        // Sample product reviews
        $reviews = [
            ['rating' => 5, 'comment' => 'Great phone!', 'status' => 'approved'],
            ['rating' => 4, 'comment' => 'Good but expensive.', 'status' => 'approved'],
            ['rating' => 5, 'comment' => 'Best laptop ever!', 'status' => 'approved'],
            ['rating' => 4, 'comment' => 'Sleek design.', 'status' => 'approved'],
            ['rating' => 5, 'comment' => 'Amazing gaming experience.', 'status' => 'approved'],
            ['rating' => 4, 'comment' => 'Solid performance.', 'status' => 'approved'],
            ['rating' => 5, 'comment' => 'Best noise cancellation.', 'status' => 'approved'],
            ['rating' => 5, 'comment' => 'Professional-grade camera.', 'status' => 'approved'],
            ['rating' => 5, 'comment' => 'Stunning picture quality.', 'status' => 'approved'],
            ['rating' => 4, 'comment' => 'Great smartwatch.', 'status' => 'approved'],
        ];

        // Insert reviews dynamically with existing IDs
        foreach ($reviews as $review) {
            ProductReview::create([
                'product_id' => $productIds[array_rand($productIds)], // Random existing product
                'user_id' => $userIds[array_rand($userIds)], // Random existing user
                'rating' => $review['rating'],
                'comment' => $review['comment'],
                'status' => $review['status'],
            ]);
        }

        $this->command->info('Product reviews seeded successfully!');
    }
}
