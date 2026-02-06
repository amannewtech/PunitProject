<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'status',
        'show_web',
        'order'
    ];

    /**
     * Auto-generate slug before saving
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($stream) {
            if (empty($stream->slug)) {
                $stream->slug = Str::slug($stream->name);
            }
        });

        static::updating(function ($stream) {
            if ($stream->isDirty('name')) {
                $stream->slug = Str::slug($stream->name);
            }
        });
    }
}