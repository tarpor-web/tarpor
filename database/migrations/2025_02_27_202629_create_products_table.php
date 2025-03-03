<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('sku', 50)->unique(); // Stock Keeping Unit
            $table->string('name', 255); // Product name
            $table->string('slug', 255)->unique(); // URL-friendly slug
            $table->text('description'); // Product description
            $table->string('short_description', 255)->nullable(); // Short description
            $table->decimal('price', 6, 2)->default(0.00); // Product price
            $table->decimal('sale_price', 6, 2)->nullable(); // Sale price
            $table->decimal('cost_price', 6, 2)->nullable(); // Cost price
            $table->integer('stock_quantity')->default(0); // Stock quantity
            $table->enum('stock_status', ['in_stock', 'out_of_stock', 'backorder'])->default('in_stock'); // Stock status
            $table->json('tags')->nullable();
            $table->json('related_products')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('barcode', 100)->nullable()->unique();
            $table->decimal('discount', 6, 2)->nullable(); // Discount percentage or amount
            $table->boolean('inventory_tracking')->default(true);
            $table->decimal('weight', 8, 2)->nullable(); // Product weight
            $table->decimal('length', 8, 2)->nullable(); // Product length
            $table->decimal('width', 8, 2)->nullable(); // Product width
            $table->decimal('height', 8, 2)->nullable(); // Product height
            $table->unsignedBigInteger('brand_id')->nullable(); // Brand foreign key
            $table->unsignedBigInteger('category_id'); // Category foreign key
            $table->json('attributes')->nullable(); // Product attributes (JSON)
            $table->json('images')->nullable(); // Product images (JSON)
            $table->string('thumbnail')->nullable(); // Thumbnail image URL
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Product status
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at for soft deletes

            // Foreign key constraints
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            // Indexes
            $table->index('name'); // Index for product name
            $table->index('slug'); // Index for product slug
            $table->index('price'); // Index for price
            $table->index('sale_price'); // Index for sale price
            $table->index('status'); // Index for status
            $table->index(['category_id', 'status']); // Composite index for category and status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
