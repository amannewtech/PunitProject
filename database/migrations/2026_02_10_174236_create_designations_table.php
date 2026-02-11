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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('designation_name');
            $table->unsignedBigInteger('user_type')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();

            // Optional foreign key (uncomment if user_types table exists)
            // $table->foreign('user_type')
            //       ->references('id')
            //       ->on('user_types')
            //       ->nullOnDelete();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};