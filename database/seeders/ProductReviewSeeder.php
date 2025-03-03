<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            ['product_id' => 1, 'user_id' => 1, 'rating' => 5, 'comment' => 'Great phone!', 'status' => 'approved'],
            ['product_id' => 2, 'user_id' => 2, 'rating' => 4, 'comment' => 'Good but expensive.', 'status' => 'approved'],
            ['product_id' => 3, 'user_id' => 3, 'rating' => 5, 'comment' => 'Best laptop ever!', 'status' => 'approved'],
            ['product_id' => 4, 'user_id' => 4, 'rating' => 4, 'comment' => 'Sleek design.', 'status' => 'approved'],
            ['product_id' => 5, 'user_id' => 5, 'rating' => 5, 'comment' => 'Amazing gaming experience.', 'status' => 'approved'],
            ['product_id' => 6, 'user_id' => 6, 'rating' => 4, 'comment' => 'Solid performance.', 'status' => 'approved'],
            ['product_id' => 7, 'user_id' => 7, 'rating' => 5, 'comment' => 'Best noise cancellation.', 'status' => 'approved'],
            ['product_id' => 8, 'user_id' => 8, 'rating' => 5, 'comment' => 'Professional-grade camera.', 'status' => 'approved'],
            ['product_id' => 9, 'user_id' => 9, 'rating' => 5, 'comment' => 'Stunning picture quality.', 'status' => 'approved'],
            ['product_id' => 10, 'user_id' => 10, 'rating' => 4, 'comment' => 'Great smartwatch.', 'status' => 'approved'],
        ];

        foreach ($reviews as $review) {
            ProductReview::create($review);
        }
    }
}
