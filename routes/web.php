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

    Route::get('/stream', [SuperadminController::class, 'stream_list'])->name('superadmin.stream.list');
    Route::post('/streams', [StreamController::class, 'stream_store'])->name('superadmin.stream.store');

    Route::get('/department', [SuperadminController::class, 'department_list'])->name('superadmin.department.list');
});

require __DIR__.'/auth.php';