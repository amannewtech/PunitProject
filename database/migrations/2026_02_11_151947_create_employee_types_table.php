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
        Schema::create('employee_types', function (Blueprint $table) {

            $table->id(); // Creates the primary key (id)
            $table->string('employee_type'); // For storing the teacher type (e.g., "Professor", "Lecturer", etc.)
            $table->string('slug')->unique();
            $table->boolean('status')->default(1); // Status: Active or Inactive
            $table->boolean('show_on_web')->default(1); // Option to show on website or not
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_types');
    }
};