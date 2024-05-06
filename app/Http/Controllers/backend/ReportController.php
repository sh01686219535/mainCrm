<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Report
    public function Report(){
        return view('backEnd.report.report');
    }
}
