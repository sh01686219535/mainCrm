<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //getCustomer
    public function getCustomer(Request $request) {
        $customer_id = $request->customer_id;
        $customer = Customer::where('id', $customer_id)->first();
        $payment = Payment::where('customer_id',$customer_id)->sum('amount');

        return response()->json([$customer,$payment]);
    }
    
}
