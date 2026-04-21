<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use IntlDateFormatter;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'starts_at',
        'duration_minutes',
        'watch_url',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'duration_minutes' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function getStartsAtJalaliAttribute(): ?string
    {
        if (! $this->starts_at instanceof Carbon) {
            return null;
        }

        if (! class_exists(IntlDateFormatter::class)) {
            return $this->starts_at->format('Y/m/d H:i');
        }

        $formatter = new IntlDateFormatter(
            'fa_IR@calendar=persian',
            IntlDateFormatter::FULL,
            IntlDateFormatter::SHORT,
            'Asia/Tehran',
            IntlDateFormatter::TRADITIONAL,
            'yyyy/MM/dd - HH:mm'
        );

        return $formatter->format($this->starts_at);
    }
}

