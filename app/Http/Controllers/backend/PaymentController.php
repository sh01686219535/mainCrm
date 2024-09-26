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
        $payment = Payment::all();
        return view('backEnd.payment.payment', compact('payment'));
    }
    // addPayment
    public function addPayment()
    {
        $customer = Customer::all();
        return view('backEnd.payment.addPayment', compact('customer'));
    }
    //paymentStore
    public function paymentStore(Request $request)
    {
        $payment = new Payment();
        $payment->customer_id = $request->customer_id;
        $payment->startdate = $request->startdate;
        $payment->end_date = $request->end_date;
        $payment->total_installment = $request->total_installment;
        $payment->per_installment = $request->per_installment;
        $payment->main_amount = $request->main_amount;
        $payment->amount = $request->amount;
        $payment->save();
        return redirect('/payment')->with('message', 'Payment Stored Successfully');
    }
    //paymentDelete
    public function paymentDelete(string $id)
    {
        //
        Payment::find($id)->delete();
        return back()->with('success', 'Payment Deleted Successfully');
    }
}