<?php

namespace App\Models;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;
use App\Models\EmployeeType;
use App\Models\BloodGroup;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingStaff extends Model
{
    use HasFactory;

    protected $table = 'teaching_staff';

    protected $fillable = [
        'user_id',
        'employee_id',
        'department_id',
        'designation_id',
        'employee_type_id',
        'blood_group_id',
        'name',
        'father_name',
        'phone',
        'email',
        'aadhar',
        'pan',
        'gender',
        'dob',
        'highest_qualification',
        'phd_passing_year',
        'teaching_experience_ug',
        'teaching_experience_pg',
        'total_experience',
        'joining_date',
        'vidwan_id',
        'present_address',
        'permanent_address',
        'computer_knowledge',
        'admin_experience',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'instagram_url',
        'youtube_url',
        'other_info',
        'profile_photo',
        'resume',
        'show_on_web',
        'status',
        'order',
    ];

    protected $casts = [
        'dob' => 'date',
        'joining_date' => 'date',
        'computer_knowledge' => 'boolean',
        'show_on_web' => 'boolean',
        'status' => 'boolean',
    ];


    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function employeeType()
    {
        return $this->belongsTo(EmployeeType::class);
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors (Optional)
    |--------------------------------------------------------------------------
    */

    public function getFullExperienceAttribute()
    {
        return ($this->teaching_experience_ug ?? 0) +
               ($this->teaching_experience_pg ?? 0);
    }


    // ----------Generating Uniquie Employee ID------------------------------

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($staff) {

    //         if (empty($staff->employee_id)) {

    //             $lastStaff = self::latest('id')->first();

    //             $nextNumber = $lastStaff ? $lastStaff->id + 1 : 1;

    //             $staff->employee_id = 'EMP-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
    //         }
    //     });
    // }

}