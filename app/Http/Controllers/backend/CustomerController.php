<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //customer
    public function customer(){
        return view('backEnd.customer.customer');
    }
    //addCustomer
    public function addCustomer(){
        return view('backEnd.customer.addCustomer');
    }
}
