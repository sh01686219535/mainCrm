<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
    //leadReport
    public function leadReport()
    {
        $leads = Lead::all();
        return view('backEnd.report.reportLead', compact('leads'));
    }
}
