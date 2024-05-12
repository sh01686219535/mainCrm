<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Expense;
use App\Models\Lead;
use App\Models\Task;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //taskReport
    public function taskReport(Request $request)
    {
        $start_date = $request->from_date;
        $end_date = $request->to_date;
        if ($start_date &&  $end_date) {
            try {
                $task = Task::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();

                return view('backEnd.report.task', compact('task'));
            } catch (\Exception $e) {
                return response()->view('error', ['error' => $e->getMessage()], 500);
            }
        }
        $task = Task::all();
        return view('backEnd.report.task', compact('task'));
    }
    // customerReport
    public function customerReport(Request $request){
        $start_date = $request->from_date;
        $end_date = $request->to_date;
        if ($start_date &&  $end_date) {
            try {
                $customer = Customer::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();

                return view('backEnd.report.customerReport', compact('customer'));
            } catch (\Exception $e) {
                return response()->view('error', ['error' => $e->getMessage()], 500);
            }
        }
        $customer = Customer::all();
        return view('backEnd.report.customerReport',compact('customer'));
    }
    //customerLeadReport
    public function customerLeadReport(Request $request){
        $start_date = $request->from_date;
        $end_date = $request->to_date;
        if ($start_date &&  $end_date) {
            try {
                $lead = Lead::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();
                return view('backEnd.report.customerLeadReport',compact('lead'));
            } catch (\Exception $e) {
                return response()->view('error', ['error' => $e->getMessage()], 500);
            }
        }
        $lead = Lead::all();
        return view('backEnd.report.customerLeadReport',compact('lead'));
    }
    //expenseReport
    public function expenseReport(Request $request){
        $start_date = $request->from_date;
        $end_date = $request->to_date;
        if ($start_date &&  $end_date) {
            try {
                $expense = Expense::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();
                return view('backEnd.report.expenseReport',compact('expense'));
            } catch (\Exception $e) {
                return response()->view('error', ['error' => $e->getMessage()], 500);
            }
        }
        $expense = Expense::all();
        return view('backEnd.report.expenseReport',compact('expense'));
    }
}
