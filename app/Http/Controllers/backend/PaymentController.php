<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //payment
    public function payment()
    {
        return view('backEnd.payment.payment');
    }
    // addPayment
    public function addPayment()
    {
        $customer = Customer::all();
        return view('backEnd.payment.addPayment',compact('customer'));
    }
}
