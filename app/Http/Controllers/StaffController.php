<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\Models\TeachingStaff;
use App\Models\Department;
use App\Models\EmployeeType;
use App\Models\BloodGroup;
use App\Models\Designation;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class StaffController extends Controller
{
    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++//
    //====================Taching Staff======================//
    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++//

    public function teaching_staff_list(){

        $streams = Stream::get();
        $departments = Department::get();
        $employee_types = EmployeeType::get();
        $blood_groups = BloodGroup::get();
        $designations = Designation::get();

        $teachers = TeachingStaff::get();

        return view('backend.teaching-staff', compact('teachers','streams','departments', 'employee_types' ,'blood_groups','designations'));
    }

    // Teacher Store logic
    public function teaching_staff_store(Request $request)
{
    $validated = $request->validate([

        'name'        => 'required|string|max:255',
        'email'       => 'required|email|unique:users,email',
        'phone'       => 'required|digits:10|unique:users,mobile',
        'dob'         => 'required|date|before:today',

        'department'    => 'required|exists:departments,id',
        'designation'   => 'required|exists:designations,id',
        'employee_type' => 'required|exists:employee_types,id',
        'blood_group'   => 'nullable|exists:blood_groups,id',

        'father_name' => 'required|string|max:255',
        'gender'      => 'required|in:male,female,other',

        'joining_date' => 'required|date',

        'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        'resume'        => 'nullable|file|mimes:pdf,doc,docx|max:1024',
    ]);

    DB::beginTransaction();

    try {

        // ✅ Generate Username (FIXED full_name bug)
            $username = Str::slug($validated['name'])
                        . date('Ymd', strtotime($validated['dob']));

        // ✅ Create User
        $user = User::create([
            'username'  => $username,
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'mobile'    => $validated['phone'], // FIXED
            'password'  => $validated['phone'],
            'role_id'   => 3,
            'is_active' => true,
        ]);



        // ✅ Employee ID
        $last = TeachingStaff::latest()->first();
        $next = $last ? intval(substr($last->employee_id, 3)) + 1 : 1;
        $employeeId = 'EMP' . str_pad($next, 4, '0', STR_PAD_LEFT);

        // ✅ File Upload
        $photoName = null;
        $resumeName = null;

        $folderPath = public_path('uploads/teaching-staff');
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $photoName = 'Teacher_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $photoName);
        }

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $resumeName = 'Resume_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $resumeName);
        }

        // ✅ Create Teaching Staff
        TeachingStaff::create([
            'user_id' => $user->id,
            'employee_id' => $employeeId,

            'department_id'    => $validated['department'],
            'designation_id'   => $validated['designation'],
            'employee_type_id' => $validated['employee_type'],
            'blood_group_id'   => $validated['blood_group'] ?? null,

            'name'        => $validated['name'],
            'father_name' => $validated['father_name'],
            'phone'       => $validated['phone'],
            'email'       => $validated['email'],
            'gender'      => $validated['gender'],
            'dob'         => $validated['dob'],
            'joining_date'=> $validated['joining_date'],

            'profile_photo' => $photoName,
            'resume'        => $resumeName,

            'status'      => $request->status ?? 1,
            'show_on_web' => $request->show_on_web ?? 1,
            'order'       => $request->order ?? 0,
        ]);

        DB::commit();

        return response()->json([
            'success' => 'Teaching Staff created successfully!'
        ]);

    } catch (\Exception $e) {

        DB::rollBack();

        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
}


}