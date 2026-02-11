<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BloodGroupSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        Schema::disableForeignKeyConstraints();

        // Truncate table
        DB::table('blood_groups')->truncate();

        // Enable foreign key checks
        Schema::enableForeignKeyConstraints();

        // Insert records
        DB::table('blood_groups')->insert([
            ['id' => 1, 'blood_group' => 'A+'],
            ['id' => 2, 'blood_group' => 'A-'],
            ['id' => 3, 'blood_group' => 'B+'],
            ['id' => 4, 'blood_group' => 'B-'],
            ['id' => 5, 'blood_group' => 'AB+'],
            ['id' => 6, 'blood_group' => 'AB-'],
            ['id' => 7, 'blood_group' => 'O+'],
            ['id' => 8, 'blood_group' => 'O-'],
        ]);
    }
}