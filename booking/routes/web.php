<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SearchAdminController;
use App\Http\Controllers\SearchStaffController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resources', [ResourceController::class, 'index'])->middleware('auth');

Route::get('/resources/{id}', [StaffController::class, 'index'])->middleware('auth');
Route::get('/staff/{id}', [StaffController::class, 'show'])->middleware('auth');

Route::post('/booking/{id}', [BookingController::class, 'store'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);


//admin routes
Route::get('/admin-view', [AdminController::class, 'index'])->middleware('auth');
Route::get('/search-staff', [SearchStaffController::class, 'index'])->middleware('auth');
Route::post('/search-staff', [SearchStaffController::class, 'create'])->middleware('auth');
Route::post('/staff-create/{id}', [StaffController::class, 'store'])->middleware('auth');
Route::get('/search-admin', [SearchAdminController::class, 'index'])->middleware('auth');
Route::post('/search-admin', [SearchAdminController::class, 'create'])->middleware('auth');
Route::post('/admin-create/{id}', [SearchAdminController::class, 'store'])->middleware('auth');
Route::get('/staff-edit/{id}', [StaffController::class, 'edit'])->middleware('auth');
Route::put('/staff-update/{id}', [StaffController::class, 'update'])->middleware('auth');
Route::delete('/staff-delete/{id}', [StaffController::class, 'destroy'])->middleware('auth');

Route::get('/staff-view', [StaffViewController::class, 'index'])->middleware('auth');
Route::post('/staff-pic', [StaffViewController::class, 'update_pic'])->middleware('auth');
Route::post('/booking-complete/{id}', [BookingController::class, 'complete'])->middleware('auth');;
