<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\UserController;
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
});

Route::get('/google/redirect',function(){
    
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
Route::get('/facebook/redirect',function(){
    
    return Socialite::driver('google')->redirect();
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