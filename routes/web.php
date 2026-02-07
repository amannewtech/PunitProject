<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ===============================
    // STREAM ROUTES
    // ===============================

     //Stream listing page
    Route::get('/stream', [SuperadminController::class, 'stream_list'])
        ->name('superadmin.stream.list');

    // Store new stream (AJAX)
    Route::post('/stream/store', [SuperadminController::class, 'stream_store'])
        ->name('superadmin.stream.store');

    // Show Stream
    Route::get('/stream/view/{id}', [SuperadminController::class, 'stream_show'])->name('superadmin.stream.show');

    // Get stream data for edit (AJAX)
    Route::get('/stream/edit/{id}', [SuperadminController::class, 'stream_edit'])
        ->name('superadmin.stream.edit');

    // Update stream (AJAX)
    Route::put('/stream/update/{id}', [SuperadminController::class, 'stream_update'])
        ->name('superadmin//.stream.update');

    // Delete stream (AJAX)
    Route::delete('/stream/delete/{id}', [SuperadminController::class, 'stream_destroy'])
        ->name('superadmin.stream.delete');

    //Delete File on Edit form load
    Route::delete('/stream/icon/delete/{id}',
    [SuperadminController::class, 'stream_icon_delete']
)->name('superadmin.stream.icon.delete');



    // ===============================
// DEPARTMENT ROUTES
// ===============================

// Department listing page
Route::get('/department', [SuperadminController::class, 'department_list'])
    ->name('superadmin.department.list');

// Store new department (AJAX)
Route::post('/department/store', [SuperadminController::class, 'department_store'])
    ->name('superadmin.department.store');

// Show department (view modal)
Route::get('/department/view/{id}', [SuperadminController::class, 'department_show'])
    ->name('superadmin.department.show');

// Get department data for edit (AJAX)
Route::get('/department/edit/{id}', [SuperadminController::class, 'department_edit'])
    ->name('superadmin.department.edit');

// Update department (AJAX)
Route::put('/department/update/{id}', [SuperadminController::class, 'department_update'])
    ->name('superadmin.department.update');

// Delete department (AJAX)
Route::delete('/department/delete/{id}', [SuperadminController::class, 'department_destroy'])
    ->name('superadmin.department.delete');

});

require __DIR__.'/auth.php';
