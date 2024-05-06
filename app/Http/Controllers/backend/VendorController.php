<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vendor = Vendor::all();
        return view('backEnd.vendor.index',compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->email = $request->email;
        $vendor->position = $request->position;
        $vendor->street = $request->street;
        $vendor->city = $request->city;
        $vendor->state = $request->state;
        $vendor->zipCode = $request->zipCode;
        $vendor->country = $request->country;
        $vendor->notes = $request->notes;
        $vendor->save();
        return back()->with('message','Vendor Created Successfully');
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
        $vendor = Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->email = $request->email;
        $vendor->position = $request->position;
        $vendor->street = $request->street;
        $vendor->city = $request->city;
        $vendor->state = $request->state;
        $vendor->zipCode = $request->zipCode;
        $vendor->country = $request->country;
        $vendor->notes = $request->notes;
        $vendor->save();
        return back()->with('message','Vendor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $vendor = Vendor::find($id);
        $vendor->delete();
        return back()->with('message','Vendor Deleted Successfully');
    }
}
