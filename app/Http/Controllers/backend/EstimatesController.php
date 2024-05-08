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
        $extimats = Extimats::all();
        return view('backEnd.estimates.index',compact('extimats'));
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
        return view('backEnd.estimates.addEstimates',compact('customer','project','item'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $invoice = new Extimats();
        $invoice->customer_id  = $request->customer_id;
        $invoice->project_id  = $request->project_id;
        $invoice->estimate_date = $request->estimate_date;
        $invoice->expiry_date  = $request->expiry_date ;
        $invoice->billing_address = $request->billing_address;
        $invoice->status = $request->status;
        $invoice->currency = $request->currency;
        $invoice->city  = $request->city ;
        $invoice->state  = $request->state ;
        $invoice->discount_type  = $request->discount_type ;
        $invoice->tag  = $request->tag ;
        $invoice->zip  = $request->zip ;
        $invoice->country = $request->country;
        $invoice->total = $request->total;
        $invoice->admin_note = $request->admin_note;
        $invoice->client_note = $request->client_note;
        $invoice->term_condition = $request->term_condition;
        $invoice->save();

        $itemIds = $request->input('item_id');
        
        $quantities = $request->input('quantity');
        // dd($itemIds);
        $amounts = $request->input('amount');
        foreach ($itemIds as $key => $itemId) {
            $quantity = $quantities[$key];
            $amount = $amounts[$key];
            $invoice->items()->attach($itemId,[
                'quantity' => $quantity,
                'amount' => $amount
            ]);
        }
        return to_route('estimates.index')->with('success', 'Estimates Created Successfully');
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
        Extimats::find($id)->delete();
        return back()->with('success', 'Estimates Deleted Successfully');
    }
}
