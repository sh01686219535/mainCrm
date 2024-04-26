<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\SalesPersonController;
use App\Http\Controllers\backend\TeamLeaderController;
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
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/customer', 'customer')->name('customer');
        Route::get('/add/customer', 'addCustomer')->name('add.customer');
        Route::post('/save/customer', 'storeCustomer')->name('save.customer');
    });

    //teamLeader Route
    Route::controller(TeamLeaderController::class)->group(function () {
        Route::get('/teamLeader', 'teamLeader')->name('teamLeader');
        Route::post('/add/teamleader', 'addTeamleader')->name('add.teamleader');
        Route::post('/update/teamleader', 'updateTeamleader')->name('update.teamleader');
        Route::get('/delete/teamleader/{id}', 'deleteTeamleader')->name('delete.teamleader');
    });
    //Sales Person Route
    Route::controller(SalesPersonController::class)->group(function () {
        Route::get('/sales/person', 'salesPerson')->name('sales.person');
        Route::post('/add/salesPerson', 'addSalesPerson')->name('add.salesPerson');
        Route::post('/update/salesPerson', 'updateSalesPerson')->name('update.salesPerson');
        Route::get('/delete/salesPerson/{id}', 'deleteSalesPerson')->name('delete.salesPerson');
    });
});
