<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
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
    //paymentStore
    public function paymentStore(Request $request)
    {
        $payment = new Payment();
        $payment->customer_id = $request->customer_id;
        $payment->startdate = $request->startdate;
        $payment->endDate = $request->endDate;
        $payment->totalInstallment = $request->totalInstallment;
        $payment->perInstallment = $request->perInstallment;
        $payment->mainAmount = $request->mainAmount;
        $payment->amount = $request->amount;
        $payment->save();
        return back()->with('message','Payment Stored Successfully');
    }
}
