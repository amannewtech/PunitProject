<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks to safely truncate
        Schema::disableForeignKeyConstraints();

        // Truncate roles table to reset auto-increment
        DB::table('employee_types')->truncate();

        // Re-enable foreign key checks
        Schema::enableForeignKeyConstraints();

        // Insert roles in specific order
        DB::table('employee_types')->insert([
            ['id' => 1, 'employee_type' => 'Permanent', 'slug' => 'permanent', 'status' => 1, 'show_on_web' => 1,],
            ['id' => 2, 'employee_type' => 'Guest', 'slug' => 'guest', 'status' => 1, 'show_on_web' => 1,],
            ['id' => 3, 'employee_type' => 'Temporary', 'slug' => 'temporary', 'status' => 1, 'show_on_web' => 1,],
            ['id' => 4, 'employee_type' => 'Visiting', 'slug' => 'visiting', 'status' => 1, 'show_on_web' => 1,],
            ['id' => 5, 'employee_type' => 'Contractual', 'slug' => 'contractual', 'status' => 1, 'show_on_web' => 1,],
            ['id' => 6, 'employee_type' => 'Ad-hoc', 'slug' => 'ad-hoc', 'status' => 1, 'show_on_web' => 1,],

        ]);
    }
}