<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'specialty',
        'city',
        'address',
        'bio',
        'rating',
        'successful_appointments',
        'recommendation_percent',
        'image_path',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'decimal:1',
            'successful_appointments' => 'integer',
            'recommendation_percent' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
