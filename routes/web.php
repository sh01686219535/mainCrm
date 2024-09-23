<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\AdminController;
use App\Http\Controllers\backend\AjaxController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\EstimatesController;
use App\Http\Controllers\backend\ExcelController;
use App\Http\Controllers\backend\SalesPersonController;
use App\Http\Controllers\backend\TeamLeaderController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\backend\LeadController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TaskController;
use Laravel\Socialite\Facades\Socialite;


Route::redirect('/', 'dashboard');
//Auth Register Route Start
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/register', [AdminController::class, 'StoreRegister'])->name('register');
//Auth Register Route End

//Auth Login Route Start
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'storeLogin'])->name('login');
//Auth Login Route End

//Forgot password Start
route::get('/forgot/password', [AdminController::class, 'forgotPassword'])->name('forgot.password');
route::post('/forgot', [AdminController::class, 'forgot'])->name('forgot');
route::get('/reset/password', [AdminController::class, 'resetPassword']);
route::post('/reset/user/password', [AdminController::class, 'resetUserPassword'])->name('reset.user.password');
//Forgot password End

//Auth Logout Route Start
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
//Auth Logout Route Start

// Mai Start
Route::get('/verify/{email}/{code}', [UserController::class, 'verifyEmail'])->name('verifyEmail');
// Mai End

//Auth Middleware Start
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

    // Payment Route
     Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment', 'payment')->name('payment');
        Route::get('/add/payment', 'addPayment')->name('add.payment');
        Route::post('/payment/store', 'paymentStore')->name('payment.store');
        Route::post('/payment/delete/{id}', 'paymentDelete')->name('payment.delete');
    });
    // Payment ajax route
    Route::controller(AjaxController::class)->group(function () {
        Route::get('/getCustomer', 'getCustomer');
    });
    // setting Route
    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'setting')->name('setting');
        Route::post('/setting/store', 'settingStore')->name('setting.store');
    });
    // Report Route
    Route::controller(ReportController::class)->group(function () {
        Route::get('/task/report', 'taskReport')->name('task.report');
        Route::get('/expense/report', 'expenseReport')->name('expense.report');
        Route::get('/customer/report', 'customerReport')->name('customer.report');
        Route::get('/customerLead/report', 'customerLeadReport')->name('customerLead.report');
    });
    //Auth Middleware End

    //estimates Route Start
    Route::resource('estimates', EstimatesController::class);
    //estimates Route End

    //Task Route Start
    Route::resource('task',TaskController::class);
    //Task Route End

    //Vendor Route Start
    Route::resource('vendor',VendorController::class);
    //Vendor Route End

    //Project Route Start
    Route::resource('project',ProjectController::class);
    //Project Route End

    //Invoice Route Start
    Route::resource('invoice',InvoiceController::class);
    //Invoice Route End

    //Item Route Start
    Route::resource('item',ItemController::class);
    //Item Route End

    //Category Route Start
    Route::resource('category',CategoryController::class);
    //Category Route End

    //Expense Route Start
    Route::resource('expense',ExpenseController::class);
    //Expense Route End

});

//Socialite Redirect Route Start
Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});
//Socialite Redirect Route End

//Socialite Callback Route Start
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
//Socialite Callback Route End