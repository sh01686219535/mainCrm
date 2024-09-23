<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('backEnd.project.projectList', compact('project'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = Customer::all();
        return view('backEnd.project.addProject', compact( 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->customer_id = $request->customer_id;
        $project->billing_type = $request->billing_type;
        $project->status = $request->status;
        $project->billing_rate = $request->billing_rate;
        $project->start_date = $request->start_date;
        $project->deadline = $request->deadline;
        $project->description = $request->description;
        $project->save();

        return to_route('project.index')->with('success', 'Project added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::all();
        $project = Project::find($id);
        return view('backEnd.project.editProject', compact( 'customer','project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        $project->title = request()->title;
        $project->customer_id = request()->customer_id;
        $project->billing_type = request()->billing_type;
        $project->status = request()->status;
        $project->billing_rate = request()->billing_rate;
        $project->start_date = request()->start_date;
        $project->deadline = request()->deadline;
        $project->description = request()->description;
        $project->save();

        return to_route('project.index')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Project::find($id)->delete();
       return back()->with('success', 'Project Deleted Successfully');

    }
}
