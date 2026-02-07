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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('stream_id')
                  ->constrained('streams')
                  ->cascadeOnDelete();

            // Core fields
            $table->string('department_name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            // Status & visibility
            $table->boolean('status')->default(1);
            $table->boolean('show_web')->default(1);

            // Ordering
            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
