<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Project;
use App\Models\SalesPerson;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::all();
        return view('backEnd.invoice.invoiceList', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::all();
        $project = Project::all();
        $salesPerson = SalesPerson::all();
        $item = Item::all();
        $lastInves = Invoice::orderBy('id', 'desc')->first();

        // Start with a default serial number
        $serialNum = '#0001';

        if ($lastInves && $lastInves->invoice_no) {
            $numericPart = substr($lastInves->invoice_no, 1);
            $serialPrefix = '#';
            $newNumericPart = $numericPart + 1;

            $paddedNumericPart = str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);

            $newSerialNum = $serialPrefix . $paddedNumericPart;

            $existingSerial = Invoice::where('invoice_no', $newSerialNum)->exists();

            while ($existingSerial) {
                $newNumericPart++; 
                $paddedNumericPart = str_pad($newNumericPart, 4, '0', STR_PAD_LEFT);

                $newSerialNum = $serialPrefix . $paddedNumericPart;
                $existingSerial = Invoice::where('invoice_no', $newSerialNum)->exists(); 
            }
            $serialNum = $newSerialNum;
            // dd($serialNum);
        }
        return view('backEnd.invoice.addInvoice', compact( 'customer','project','salesPerson','item','serialNum'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $invoice = new Invoice();
        $invoice->customer_id  = $request->customer_id;
        $invoice->project_id  = $request->project_id;
        $invoice->sales_people_id = $request->sales_people_id;
        $invoice->invoice_no  = $request->invoice_no ;
        $invoice->billing_address = $request->billing_address;
        $invoice->city = $request->city;
        $invoice->state = $request->state;
        $invoice->zip  = $request->zip ;
        $invoice->country = $request->country;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->due_date = $request->due_date;
        $invoice->currency = $request->currency;
        $invoice->admin_note = $request->admin_note;
        $invoice->client_note = $request->client_note;
        $invoice->term_condition = $request->term_condition;
        $invoice->total = $request->total;
        $invoice->admin_note = $request->admin_note;
       
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
        return to_route('invoice.index')->with('success', 'Invoice Created Successfully');
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
        Invoice::findOrFail($id)->delete();
        return back()->with('success','Invoice Deleted Successfully');
    }
}
