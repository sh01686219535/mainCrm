<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ExcelController;
use App\Http\Controllers\backend\SalesPersonController;
use App\Http\Controllers\backend\TeamLeaderController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\backend\LeadController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\TaskController;
use Laravel\Socialite\Facades\Socialite;


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
// Route::get('googleLogin', [AdminController::class, 'googleLogin']);
// Route::get('/auth/google/callback', [AdminController::class, 'googleHandler']);


Route::group(['middleware' => 'UserAuth'], function () {
    
    //Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    //customer Route
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/customer', 'customer')->name('customer');
        Route::get('/add/customer', 'addCustomer')->name('add.customer');
        Route::post('/save/customer', 'storeCustomer')->name('save.customer');
        Route::get('/approve/customer', 'approveCustomer')->name('approve.customer');
        Route::get('/customer/status/change/{id}', 'customerStatusChange')->name('customer.status.change');
        Route::get('/delete/customer/{id}', 'deleteCustomer')->name('delete.customer');
        Route::get('/customer/list', 'customerList')->name('customer.list');
        Route::get('/customer/edit/{id}', 'customerEdit')->name('customer.edit');
        Route::post('/update/customer', 'updateCustomer')->name('update.customer');
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
    //Lead Route
    Route::resource('lead',LeadController::class);
    Route::post('lead/excel',[ExcelController::class,'lead_excel'])->name('lead.excel');
    Route::post('lead/export-excel',[ExcelController::class,'exportExcel'])->name('lead.exportExcel');
    
    //Task Route
    Route::resource('task',TaskController::class);
});



//Socialite
Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/google/callback', function () {
    $user = Socialite::driver('google')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName())));
    $getUser = \App\Models\User::where('email',$userEmail)->first();
    if ($getUser) {
        \Illuminate\Support\Facades\Auth::login($getUser);
    
        return redirect('dashboard');
    } else {
        // Create or retrieve the user instance from your application's User model
        $user = \App\Models\User::create([
            'name' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
    
        // Log in the newly created user
        \Illuminate\Support\Facades\Auth::login($user);
    
        return redirect('dashboard');
    }
});
Route::get('/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
    $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName())));
    $getUser = \App\Models\User::where('email',$userEmail)->first();
    if ($getUser) {
        \Illuminate\Support\Facades\Auth::login($getUser);
    
        return redirect('dashboard');
    } else {
        // Create or retrieve the user instance from your application's User model
        $user = \App\Models\User::create([
            'name' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
    
        // Log in the newly created user
        \Illuminate\Support\Facades\Auth::login($user);
    
        return redirect('dashboard');
    }
});