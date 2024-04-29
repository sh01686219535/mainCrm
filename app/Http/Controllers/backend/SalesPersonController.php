<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SalesPerson;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class SalesPersonController extends Controller
{
    //salesPerson
    public function salesPerson(){
        $teamLeader =  TeamLeader::all();
        $salesPerson = SalesPerson::all();
        return view('backEnd.salesPerson.salesPerson',compact('teamLeader','salesPerson'));
    }
    //addSalesPerson
    public function addSalesPerson(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $salesPerson = new SalesPerson();
        $salesPerson->teamLeader_id = $request->teamLeader_id;
        $salesPerson->name = $request->name;
        $salesPerson->phone = $request->phone;
        $salesPerson->email = $request->email;
        $salesPerson->designation = $request->designation;
        if ($request->file('image')) {
            $salesPerson->image = $this->SaveImage($request);
        }
        $salesPerson->save();
        return back()->with('success','Sales Person Create Successfull');
    }
    //SaveImage
    public function SaveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/SalesPerson-img/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
    //updateSalesPerson
    public function updateSalesPerson(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $salesPerson = SalesPerson::find($request->salesPerson_id);
        $salesPerson->teamLeader_id = $request->teamLeader_id;
        $salesPerson->name = $request->name;
        $salesPerson->phone = $request->phone;
        $salesPerson->email = $request->email;
        $salesPerson->designation = $request->designation;
        if ($request->file('image')) {
            $salesPerson->image = $this->SaveImage($request);
        }
        $salesPerson->save();
        return back()->with('success','Sales Person Updated Successfull');
    }
    //deleteSalesPerson
    public function deleteSalesPerson($id){
        $SalesPerson = SalesPerson::find($id);
        if ($SalesPerson->image){
            unlink($SalesPerson->image);
        }
        $SalesPerson->delete();
        return back()->with('success','Sales Person Deleted Successfull');

    }
}
