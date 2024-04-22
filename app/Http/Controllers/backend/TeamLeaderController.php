<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class TeamLeaderController extends Controller
{
    //teamLeader
    public function teamLeader()
    {
        $teamLeader =  TeamLeader::all();
        return view('backEnd.teamLeader.teamLeader',compact('teamLeader'));
    }
    //addTeamleader
    public function addTeamleader(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $teamLeader = new TeamLeader();
        $teamLeader->name = $request->name;
        $teamLeader->phone = $request->phone;
        $teamLeader->email = $request->email;
        $teamLeader->designation = $request->designation;
        if ($request->file('image')) {
            $teamLeader->image = $this->SaveImage($request);
        }
        $teamLeader->save();
        return back()->with('success','TeamLeader Create Successfull');
    }
    //SaveImage
    public function SaveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'backEndAsset/teamLeader-img/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
}
