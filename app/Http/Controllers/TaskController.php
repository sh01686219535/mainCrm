<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\SalesPerson;
use App\Models\Task;
use App\Models\TeamLeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::all();
        return view('backEnd.task.taskList', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teamLeader = TeamLeader::all();
        $salesPerson = SalesPerson::all();
        $lead = Lead::all();
        return view('backEnd.task.addTask', compact('teamLeader', 'salesPerson','lead'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = 'backEndAsset/file/'.uniqid().'.'.$extension;
            $request->file('file')->move('backEndAsset/file',$fileName);
        }
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->lead_id = $request->lead_id ;
        $task->priority = $request->priority;
        $task->start_date = $request->start_date;
        $task->due_date = $request->due_date;
        $task->status = $request->status;
        $task->sales_people_id  = $request->sales_people_id ;
        $task->team_leader_id = $request->team_leader_id;
        $task->file = $fileName;
        $task->save();

        return to_route('task.index')->with('success', 'Task added Successfully');
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
        $task = Task::findOrFail($id);
        $teamLeader = TeamLeader::all();
        $salesPerson = SalesPerson::all();
        $lead = Lead::all();
        return view('backEnd.task.editTask', compact('task', 'teamLeader', 'salesPerson','lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = 'backEndAsset/file/'.uniqid().'.'.$extension;
            try {
                $request->file('file')->move('backEndAsset/file', $fileName);
            } catch (\Exception $e) {
                // Log or display the error message
                dd($e->getMessage());
            }
            $task->file = $fileName;
            if(File::exists($task->file)){
                File::delete($task->file);
            }
        }else{
            $fileName = $request->file;
        }
        $task->title = $request->title;
        $task->description = $request->description;
        $task->lead_id = $request->lead_id ;
        $task->priority = $request->priority;
        $task->start_date = $request->start_date;
        $task->due_date = $request->due_date;
        $task->status = $request->status;
        $task->sales_people_id  = $request->sales_people_id ;
        $task->team_leader_id = $request->team_leader_id;
        if ($request->file('file')) {
            $task->file = $fileName;
        }
        $task->save();
        return to_route('task.index')->with('success','Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        if(File::exists($task->file)){
            File::delete($task->file);
        }
        $task->delete();
        return back()->with('danger', 'Task Deleted Successfully');
    }
}
