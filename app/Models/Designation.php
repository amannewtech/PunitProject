<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    //
    protected $table = 'designations';

    protected $fillable = [
        'designation_name',
        'user_type',
        'status',
    ];

    public function getUserTypeLabelAttribute()
    {
        return match ($this->user_type) {
            3 => 'Teaching Staff',
            4 => 'Non-teaching Staff',
            default => '-',
        };
    }

}