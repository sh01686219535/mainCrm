<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\SalesPerson;
use App\Models\TeamLeader;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //customer
    public function customer(){
        return view('backEnd.customer.customer');
    }
    //addCustomer
    public function addCustomer(){
        $salesPerson = SalesPerson::all();
        $teamLeader = TeamLeader::all();
        return view('backEnd.customer.addCustomer',compact('salesPerson','teamLeader'));
    }
    //storeCustomer
    public function storeCustomer(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->fatherName = $request->fatherName;
        $customer->motherName = $request->motherName;
        $customer->spouseName = $request->spouseName;
        $customer->dateOfBirth = $request->dateOfBirth;
        $customer->dateOfBirthSpouse = $request->dateOfBirthSpouse;
        $customer->marriageDay = $request->marriageDay;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->nidNumber = $request->nidNumber;
        $customer->PassportNumber = $request->PassportNumber;
        $customer->nationality = $request->nationality;
        $customer->religion = $request->religion;
        $customer->profession = $request->profession;
        $customer->facebookId = $request->facebookId;
        $customer->presentAddress = $request->presentAddress;
        $customer->permanentAddress = $request->permanentAddress;
        $customer->officeAddress = $request->officeAddress;
        $customer->password = bcrypt($request->password);
        $customer->projectName = $request->projectName;
        $customer->projectAddress = $request->projectAddress;
        $customer->categoryOfOwnership = $request->categoryOfOwnership;
        $customer->ownershipSize = $request->ownershipSize;
        $customer->noOffOwnership = $request->noOffOwnership;
        $customer->pricePerOwnership = $request->pricePerOwnership;
        $customer->pricePerOwnershipInWord = $request->pricePerOwnershipInWord;
        $customer->totalPrice = $request->totalPrice;
        $customer->totalPriceInWord = $request->totalPriceInWord;
        $customer->specialDiscount = $request->specialDiscount;
        $customer->specialDiscountInWord = $request->specialDiscountInWord;
        $customer->modeOfPayment = $request->modeOfPayment;
        $customer->bookingMoney = $request->bookingMoney;
        $customer->bookingMoneyInWord = $request->bookingMoneyInWord;
        $customer->bookingMoneyDate = $request->bookingMoneyDate;
        $customer->paymentType = $request->paymentType;
        $customer->noOfInstallment = $request->noOfInstallment;
        $customer->instPerMonth = round($request->instPerMonth);
        $customer->mainAmount = $request->mainAmount;
        $customer->agreedAmount = $request->agreedAmount;
        $customer->inStallmentStart = $request->inStallmentStart;
        $customer->inStallmentTo = $request->inStallmentTo;
        $customer->description = $request->description;
        $customer->nomineeName = $request->nomineeName;
        $customer->nomineeNumber = $request->nomineeNumber;
        $customer->relationToNominee = $request->relationToNominee;
        $customer->referenceNameA = $request->referenceNameA;
        $customer->referenceCellNumerA = $request->referenceCellNumerA;
        $customer->referenceNameb = $request->referenceNameb;
        $customer->referenceCellNumerB = $request->referenceCellNumerB;
        $customer->salesPerson_id = $request->salesPerson_id;
        $customer->teamLeader_id = $request->teamLeader_id;
        if ($request->file('nomineeImage')) {
            $customer->userImage = $this->makeUserImg($request);
        }
       if ($request->file('nomineeImage')) {
        $customer->nomineeImage = $this->makeNomineeImg($request);
       }
        $customer->save();
        return back()->with('success','Customer Created Successfully');
    }
    // makeUserImg
    public function makeUserImg($request){
        $img = $request->file('userImage');
        $imgName = rand().'.'.$img->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/UserImg/';
        $imgUrl = $directory.$imgName;
        $img->move($directory,$imgName);
        return  $imgUrl;
    }
    // makeNomineeImg
    public function makeNomineeImg($request){
        $img = $request->file('nomineeImage');
        $imgName = rand().'.'.$img->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/nomineeImage/';
        $imgUrl = $directory.$imgName;
        $img->move($directory,$imgName);
        return  $imgUrl;
    }
    //approveCustomer
    public function approveCustomer(){
        $customer = Customer::where('status','pending')->get();
        return view('backEnd.customer.approveCustomer',compact('customer'));
    }
}
