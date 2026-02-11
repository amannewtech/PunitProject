<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = [
        'department_name',
        'stream_id',
        'description',
        'slug',
        'status',
        'show_web',
        'order',
    ];

    /**
     * Department belongs to a stream
     */
    public function stream()
    {
        return $this->belongsTo(Stream::class, 'stream_id');
    }

    /**
     * Auto-generate slug from department name
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($department) {
            if (empty($department->slug)) {
                $department->slug = Str::slug($department->department_name);
            }
        });

        static::updating(function ($department) {
            if ($department->isDirty('department_name')) {
                $department->slug = Str::slug($department->department_name);
            }
        });
    }
}