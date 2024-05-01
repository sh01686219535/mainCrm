<?php

namespace App\Http\Controllers\backend;

<<<<<<< HEAD
=======

use  App\Http\Controllers\Controller;
>>>>>>> 1a7d122b77a7adadc5dd26de3d4da9be8b0b7e64

use App\Http\Controllers\Controller;
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
        return view('backEnd.lead.leadlist', compact('lead'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teamLeader = TeamLeader::all();
        $salesPerson = SalesPerson::all();
        return view('backEnd.lead.addLead', compact('teamLeader', 'salesPerson'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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

        return back()->with('success', 'Lead added Successfully');
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
        $lead = Lead::findOrFail($id); // Use findOrFail to automatically handle 404 if the lead doesn't exist
        $teamLeader = TeamLeader::all();
        $salesPerson = SalesPerson::all();
        return view('backEnd.lead.editLead', compact('lead', 'teamLeader', 'salesPerson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
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

        $lead = Lead::find($id);
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


        return back()->with('success', 'Lead Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lead::find($id)->delete();
        return back()->with('danger', 'Lead Deleted Successfully');
    }
    //Excel Import Page

}
