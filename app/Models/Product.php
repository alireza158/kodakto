<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'category',
        'short_description',
        'description',
        'price',
        'discount_price',
        'rating',
        'image_path',
        'is_active',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'discount_price' => 'decimal:2',
            'rating' => 'decimal:1',
            'is_active' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function categoryRelation(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
