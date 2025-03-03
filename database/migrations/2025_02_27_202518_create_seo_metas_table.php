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
        Schema::create('seo_metas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('entity_type', 50); // Entity type (e.g., product, category)
            $table->unsignedBigInteger('entity_id'); // Entity ID
            $table->string('meta_title', 255); // Meta title
            $table->text('meta_description'); // Meta description
            $table->text('meta_keywords')->nullable(); // Meta keywords
            $table->string('canonical_url', 255)->nullable(); // Canonical URL
            $table->string('og_title', 255)->nullable(); // Open Graph title
            $table->text('og_description')->nullable(); // Open Graph description
            $table->string('og_image', 255)->nullable(); // Open Graph image
            $table->string('twitter_title', 255)->nullable(); // Twitter title
            $table->text('twitter_description')->nullable(); // Twitter description
            $table->string('twitter_image', 255)->nullable(); // Twitter image
            $table->json('schema_markup')->nullable(); // JSON-LD schema markup
            $table->string('robots', 255)->default('index, follow'); // Robots meta tag
            $table->timestamps(); // created_at and updated_at

            // Indexes
            $table->index('entity_type'); // Index for entity_type
            $table->index('entity_id'); // Index for entity_id
            $table->unique(['entity_type', 'entity_id']); // Unique index for entity_type + entity_id
            $table->index('meta_title'); // Index for meta_title (optional)
            $table->index('robots'); // Index for robots (optional)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_metas');
    }
};
