<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teaching_staff', function (Blueprint $table) {
            $table->id();

            // User Link
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->string('employee_id')->unique()->nullable();

            // Academic Relations
            $table->foreignId('department_id')->constrained('departments')->restrictOnDelete();
            $table->foreignId('designation_id')->constrained('designations')->restrictOnDelete();
            $table->foreignId('employee_type_id')->constrained('employee_types')->restrictOnDelete();
            $table->foreignId('blood_group_id')->nullable('blood_groups')->constrained()->nullOnDelete();

            // Personal Info
            $table->string('name');
            $table->string('father_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('aadhar', 12)->nullable();
            $table->string('pan', 10)->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('dob');

            // Qualification
            $table->string('highest_qualification')->nullable();
            $table->string('phd_passing_year')->nullable();

            // Experience
            $table->unsignedInteger('teaching_experience_ug')->nullable();
            $table->unsignedInteger('teaching_experience_pg')->nullable();
            $table->unsignedInteger('total_experience')->nullable();

            // Joining Info
            $table->date('joining_date');
            $table->string('vidwan_id')->nullable();

            // Address
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();

            // Skills
            $table->boolean('computer_knowledge')->default(0);
            $table->text('admin_experience')->nullable();

            // Social Media
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();

            $table->text('other_info')->nullable();

            // Files
            $table->string('profile_photo')->nullable();
            $table->string('resume')->nullable();

            // Settings
            $table->boolean('show_on_web')->default(true);
            $table->boolean('status')->default(true);
            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_staff');
    }
};