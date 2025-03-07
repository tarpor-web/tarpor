<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'parent_id', 'description', 'image', 'status'
    ];

    /**
     * Get the parent category.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    /**
     * Get the child categories.
     */
//    public function children(): HasMany
//    {
//        return $this->hasMany(__CLASS__, 'parent_id');
//    }

    public function children(): HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id')->with('children');
    }

    /**
     * Get the products in this category.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }
    /**
     * Get the SEO metadata for this category.
     */
    public function seo()
    {
        return $this->morphOne(SeoMeta::class, 'entity');
    }
    public function totalProducts()
    {
        // Sum of products directly associated with this category
        $productsCount = $this->products->count();

        // Recursively sum products from all children
        foreach ($this->children as $child) {
            $productsCount += $child->totalProducts();
        }

        return $productsCount;
    }

}
