<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\Payment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashboard
    public function dashboard()
    {
        $customer = Customer::count('id');
        $lead = Lead::count('id');
        $today = date("Y-m-d");

        $todaysPayment = Payment::whereDate('created_at', $today)->sum('amount');
        $MonthlyPayment = Payment::whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('amount');
        return view('backEnd.dashboard.home.home', compact('customer', 'lead', 'todaysPayment', 'MonthlyPayment'));
    }
}
