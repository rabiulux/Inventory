<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homeView'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboard');

Route::get('/category', [CategoryController::class, 'categoryView'])->name('category');

Route::get('/registration', [UserController::class, 'registrationView'])->name('registration');
Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::get('/reset', [UserController::class, 'resetView'])->name('reset');
Route::get('/otp', [UserController::class, 'otpView'])->name('otp');
Route::get('/otpVerify', [UserController::class, 'otpVerifyView'])->name('otpVerify');
Route::get('/userProfile', [UserController::class, 'profileView'])->name('profile');

Route::get('/customer', [CustomerController::class, 'customerView'])->name('customer');

Route::get('/invoice', [InvoiceController::class, 'invoiceView'])->name('invoice');

Route::get('/sale', [SaleController::class, 'saleView'])->name('sale');

Route::get('/product', [ProductController::class, 'productView'])->name('product');

Route::get('/report', [ReportController::class, 'reportView'])->name('report');
