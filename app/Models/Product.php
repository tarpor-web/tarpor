<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    // Define fillable fields
    protected $fillable = [
        'sku', 'name', 'slug', 'description', 'short_description', 'price', 'sale_price',
        'cost_price', 'stock_quantity', 'stock_status', 'tags', 'weight', 'related_products',
        'length', 'width', 'height', 'brand_id', 'category_id', 'attributes', 'images', 'thumbnail',
        'status', 'deleted_at',
    ];

    // Cast attributes to appropriate types
    protected $casts = [
        'attributes' => 'array', // Cast attributes to array
        'images' => 'array',     // Cast images to array
        'tags' => 'array',       // Cast tags to array
        'related_products' => 'array', // Cast related_products to array
    ];

    // Relationships
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function seo()
    {
        return $this->morphOne(SeoMeta::class, 'entity');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
