<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\SalesPerson;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lead = Lead::all();
        return view('backEnd.lead.lead',compact('lead'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teamLeader = TeamLeader::all();
        $salesPerson = SalesPerson::all();
        return view('backEnd.lead.addLead',compact('teamLeader','salesPerson'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'source' => 'required',
            'sales_people_id' => 'required',
        ]);
        $lead = new Lead();
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->address = $request->address;
        $lead->city = $request->city;
        $lead->state = $request->state;
        $lead->company = $request->company;
        $lead->position = $request->position;
        $lead->zip_code = $request->zip_code;
        $lead->country = $request->country;
        $lead->source = $request->source;
        $lead->website = $request->website;
        $lead->description = $request->description;
        $lead->status = $request->status;
        $lead->sales_people_id = $request->sales_people_id;
        $lead->team_leader_id = $request->team_leader_id;
        $lead->save();
        return back()->with('success','Lead added Successfully');
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