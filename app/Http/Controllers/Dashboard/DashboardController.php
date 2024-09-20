<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\Payment;
use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Promise\Create;

class DashboardController extends Controller
{
    //Dashboard Index
    public function dashboard()
    {
        $customerCount = Customer::count();
        $leadCount = Lead::count();
        $today = date("Y-m-d");

        $todaysPayment = Payment::whereDate('created_at', $today)->sum('amount');
        $MonthlyPayment = Payment::whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->sum('amount');

        $monthlyCustomerCounts = Lead::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];
        $colors = ['#FFBF00', '#FF7F50', '#DE3163', '#9FE2BF', '#40E0D0', '#6495ED', '#CCCCFF', '#800000'];

        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $found = $monthlyCustomerCounts->firstWhere('month', $i);
            $count = $found ? $found->count : 0;
            $labels[] = $month;
            $data[] = $count;
        }

        $dataSets = [
            [
                'label' => 'Leads',
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];

        $Customer = DB::select("select count(*) as total_mode, mode_of_payment from customers group by mode_of_payment");
        $chartData = "";
        foreach ($Customer as $value) {
            $chartData .= "['" . $value->modeOfPayment . "'," . $value->total_mode . "],";
        }
        $charr = rtrim($chartData, ",");

        $payments = Payment::select(DB::raw("MONTH(created_at) as month, COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("MONTH(created_at)"))
            ->get()
            ->keyBy('month');  


        $months = array_fill(0, 12, 0);
        foreach ($payments as $month => $data) {
            $months[$month - 1] = $data['count'];
        }
        $paymentData = json_encode(array_values($months));
        return view('backEnd.dashboard.home.home',compact( 'paymentData','charr', 'labels', 'dataSets', 'customerCount', 'leadCount', 'todaysPayment', 'MonthlyPayment'));
    }
}