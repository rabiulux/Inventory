<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/reset', [UserController::class, 'reset'])->name('reset');
Route::get('/otp', [UserController::class, 'otp'])->name('otp');
Route::get('/otpVerify', [UserController::class, 'otpVerify'])->name('otpVerify');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
