<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku', 'name', 'slug', 'description', 'short_description', 'price', 'sale_price',
        'cost_price', 'stock_quantity', 'stock_status', 'tags',  'weight', 'related_products', 'length', 'width',
        'height', 'brand_id', 'category_id', 'attributes', 'images', 'thumbnail', 'status'
    ];

    // Add this property to cast attributes and images to JSON
    protected $casts = [
        'attributes' => 'array',
        'images' => 'array',
        'tags' => 'array',
        'related_products' => 'array',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function seo()
    {
        return $this->morphOne(SeoMeta::class, 'entity');
    }



}
