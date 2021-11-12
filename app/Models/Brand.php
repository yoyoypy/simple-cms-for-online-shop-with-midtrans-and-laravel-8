<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'brand'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get all of the product for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function productcategories()
    {
        return $this->hasManyThrough(ProductCategory::class, Product::class, 'categories_id', 'brands_id', 'id');
    }

    /**
     * Get all of the product fand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class, 'brands_id', 'id');
    }
}
