<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //getCustomer
    public function getCustomer(Request $request){
        $customer_id = $request->customer_id;
        return response()->json([$customer_id]);
    }
}
