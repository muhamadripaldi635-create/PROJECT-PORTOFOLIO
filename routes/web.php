<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ExperienceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth Routes (Login / Logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('experiences', ExperienceController::class);
});

