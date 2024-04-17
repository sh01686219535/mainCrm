<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\Dashboard\DashboardController;


Route::redirect('/', 'dashboard');
//Auth Register Route
Route::get('/register',[AdminController::class,'register'])->name('register');
Route::post('/register',[AdminController::class,'StoreRegister'])->name('register');

//Auth Login Route
Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/login',[AdminController::class,'storeLogin'])->name('login');

//forgot password
route::get('forgot/password',[AdminController::class,'forgotPassword'])->name('forgot.password');

// Auth Logout Route
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

//Dashboard Route
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');