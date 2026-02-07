<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Stream extends Model
{
    // Mass assignable fields
    protected $table = "streams";
    protected $fillable = [
        'name',
        'description',
        'icon',
        'slug',
        'status',
        'show_web',
        'order'
    ];

     /**
     * Stream has many departments
     */
    public function departments()
    {
        return $this->hasMany(Department::class, 'stream_id');
    }

    /**
     * Auto-generate slug from name
     */
    protected static function boot()
    {
        parent::boot();

        // Create slug on insert
        static::creating(function ($stream) {
            if (empty($stream->slug)) {
                $stream->slug = Str::slug($stream->name);
            }
        });

        // Update slug if name changes
        static::updating(function ($stream) {
            if ($stream->isDirty('name')) {
                $stream->slug = Str::slug($stream->name);
            }
        });
    }
}
