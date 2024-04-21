<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\UserController;

Route::redirect('/', 'dashboard');
//Auth Register Route
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/register', [AdminController::class, 'StoreRegister'])->name('register');

//Auth Login Route
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'storeLogin'])->name('login');

//forgot password
route::get('/forgot/password', [AdminController::class, 'forgotPassword'])->name('forgot.password');
route::post('/forgot', [AdminController::class, 'forgot'])->name('forgot');
route::get('/reset/password', [AdminController::class, 'resetPassword']);
route::post('/reset/user/password', [AdminController::class, 'resetUserPassword'])->name('reset.user.password');

// Auth Logout Route
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

// mail
Route::get('/verify/{email}/{code}', [UserController::class, 'verifyEmail'])->name('verifyEmail');

//googleLogin 
Route::get('googleLogin', [AdminController::class, 'googleLogin']);
Route::get('/auth/google/callback', [AdminController::class, 'googleHandler']);


Route::group(['middleware' => 'UserAuth'], function () {
    //Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    //customer Route
    Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');

});
