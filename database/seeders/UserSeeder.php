<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'SuperAdmin',
                'username' => 'superadmin',
                'email' => 'superadmin@punit.com',
                'mobile' => '9999999999',
                'password' => Hash::make('SuperAdmin@punit123'),
                'role_id' => 1, // Super Admin
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'last_login_at' => null,
                'last_login_ip' => null,
                'password_changed_at' => null,
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@punit.com',
                'mobile' => '8888888888',
                'password' => Hash::make('Admin@punit123'),
                'role_id' => 2, // Admin
                'is_active' => true,
                'email_verified_at' => Carbon::now(),
                'last_login_at' => null,
                'last_login_ip' => null,
                'password_changed_at' => null,
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
