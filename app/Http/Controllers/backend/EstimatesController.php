<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Extimats;
use App\Models\Item;
use App\Models\Project;
use Illuminate\Http\Request;

class EstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backEnd.estimates.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customer = Customer::all();
        $project = Project::all();
        $item = Item::all();
        // $lastInves = Extimats::orderBy('id', 'desc')->first();

        // // Start with a default serial number
        // $serialNum = '#0001';

        // if ($lastInves && $lastInves->invoice_no) {
        //     $numericPart = substr($lastInves->invoice_no, 1);
        //     $serialPrefix = '#';
        //     $newNumericPart = $numericPart + 1;

        //     $paddedNumericPart = str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);

        //     $newSerialNum = $serialPrefix . $paddedNumericPart;

        //     $existingSerial = Extimats::where('invoice_no', $newSerialNum)->exists();

        //     while ($existingSerial) {
        //         $newNumericPart++; 
        //         $paddedNumericPart = str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);

        //         $newSerialNum = $serialPrefix . $paddedNumericPart;
        //         $existingSerial = Extimats::where('invoice_no', $newSerialNum)->exists(); 
        //     }
        //     $serialNum = $newSerialNum;
        //     // dd($serialNum);
        // }
        return view('backEnd.estimates.addEstimates',compact('customer','project','item'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
