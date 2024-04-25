<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SalesPerson;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //customer
    public function customer(){
        return view('backEnd.customer.customer');
    }
    //addCustomer
    public function addCustomer(){
        $salesPerson = SalesPerson::all();
        $teamLeader = TeamLeader::all();
        return view('backEnd.customer.addCustomer',compact('salesPerson','teamLeader'));
    }
}
