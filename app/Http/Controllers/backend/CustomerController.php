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
    public function customer()
    {
        $salesPerson = SalesPerson::all();
        $teamLeader = TeamLeader::all();
        return view('backEnd.customer.addCustomer', compact('salesPerson', 'teamLeader'));
    }
    //storeCustomer
    public function storeCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->fathername = $request->fathername;
        $customer->mothername = $request->mothername;
        $customer->spousename = $request->spousename;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->date_of_birthspouse = $request->date_of_birthspouse;
        $customer->marriageday = $request->marriageday;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->nid_number = $request->nid_number;
        $customer->passport_number = $request->passport_number;
        $customer->nationality = $request->nationality;
        $customer->religion = $request->religion;
        $customer->profession = $request->profession;
        $customer->facebook_id = $request->facebook_id;
        $customer->present_address = $request->present_address;
        $customer->permanent_address = $request->permanent_address;
        $customer->office_address = $request->office_address;
        $customer->password = bcrypt($request->password);
        $customer->project_name = $request->project_name;
        $customer->project_address = $request->project_address;
        $customer->category_of_ownership = $request->category_of_ownership;
        $customer->ownership_size = $request->ownership_size;
        $customer->no_off_ownership = $request->no_off_ownership;
        $customer->price_per_ownership = $request->price_per_ownership;
        $customer->price_per_ownership_in_word = $request->price_per_ownership_in_word;
        $customer->total_price = $request->total_price;
        $customer->total_price_in_word = $request->total_price_in_word;
        $customer->special_discount = $request->special_discount;
        $customer->special_discount_inword = $request->special_discount_inword;
        $customer->mode_of_payment = $request->mode_of_payment;
        $customer->booking_money = $request->booking_money;
        $customer->booking_money_inword = $request->booking_money_inword;
        $customer->booking_money_date = $request->booking_money_date;
        $customer->payment_type = $request->payment_type;
        $customer->no_o_installment = $request->no_o_installment;
        $customer->inst_permonth = round($request->inst_permonth);
        $customer->main_amount = $request->main_amount;
        $customer->agreed_amount = $request->agreed_amount;
        $customer->in_stallment_start = $request->in_stallment_start;
        $customer->in_stallment_to = $request->in_stallment_to;
        $customer->description = $request->description;
        $customer->nominee_name = $request->nominee_name;
        $customer->nominee_number = $request->nominee_number;
        $customer->relation_to_nominee = $request->relation_to_nominee;
        $customer->reference_name_a = $request->reference_name_a;
        $customer->reference_cell_numer_a = $request->reference_cell_numer_a;
        $customer->reference_name_b = $request->reference_name_b;
        $customer->reference_cell_numer_b = $request->reference_cell_numer_b;
        $customer->sales_person_id = $request->sales_person_id;
        $customer->teamleader_id = $request->teamleader_id;
        if ($request->file('user_image')) {
            $customer->user_image = $this->makeUserImg($request);
        }
        if ($request->file('nominee_image')) {
            $customer->nominee_image = $this->makeNomineeImg($request);
        }
        $customer->save();
        return redirect('/approve/customer')->with('success', 'Customer Created Successfully');
    }
    // makeUserImg
    public function makeUserImg($request)
    {
        $img = $request->file('user_image');
        $imgName = rand() . '.' . $img->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/UserImg/';
        $imgUrl = $directory . $imgName;
        $img->move($directory, $imgName);
        return  $imgUrl;
    }
    // makeNomineeImg
    public function makeNomineeImg($request)
    {
        $img = $request->file('nominee_image');
        $imgName = rand() . '.' . $img->getClientOriginalExtension();
        $directory = 'backEndAsset/projectImg/nomineeImage/';
        $imgUrl = $directory . $imgName;
        $img->move($directory, $imgName);
        return  $imgUrl;
    }
    //approveCustomer
    public function approveCustomer()
    {
        $customer = Customer::where('status', 'pending')->get();
        return view('backEnd.customer.approveCustomer', compact('customer'));
    }
    // customerStatusChange
    public function customerStatusChange($id)
    {
        $customer = Customer::find($id);
        $customer->status = 'approved';
        $customer->save();
        return redirect('/customer/list')->with('success', 'Customer Approved Successfully');
    }
    //deleteCustomer
    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        if ($customer->user_image) {
            unlink($customer->user_image);
        }
        if ($customer->nominee_image) {
            unlink($customer->nominee_image);
        }
        $customer->delete();
        return back()->with('success', 'Customer Deleted Successfully');
    }
    //customerList
    public function customerList()
    {
        $customer = Customer::where('status', 'approved')->get();
        return view('backEnd.customer.customerList', compact('customer'));
    }
    //customerEdit
    public function customerEdit($id)
    {
        $customer = Customer::find($id);
        $salesPerson = SalesPerson::all();
        $teamLeader = TeamLeader::all();
        return view('backEnd.customer.customeredit', compact('customer', 'salesPerson', 'teamLeader'));
    }
    //updateCustomer
    public function updateCustomer(Request $request)
    {
        $customer = Customer::find($request->customer_id);
        $customer->name = $request->name;
        $customer->fathername = $request->fathername;
        $customer->mothername = $request->mothername;
        $customer->spousename = $request->spousename;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->date_of_birthspouse = $request->date_of_birthspouse;
        $customer->marriageday = $request->marriageday;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->nid_number = $request->nid_number;
        $customer->passport_number = $request->passport_number;
        $customer->nationality = $request->nationality;
        $customer->religion = $request->religion;
        $customer->profession = $request->profession;
        $customer->facebook_id = $request->facebook_id;
        $customer->present_address = $request->present_address;
        $customer->permanent_address = $request->permanent_address;
        $customer->office_address = $request->office_address;
        $customer->password = bcrypt($request->password);
        $customer->project_name = $request->project_name;
        $customer->project_address = $request->project_address;
        $customer->category_of_ownership = $request->category_of_ownership;
        $customer->ownership_size = $request->ownership_size;
        $customer->no_off_ownership = $request->no_off_ownership;
        $customer->price_per_ownership = $request->price_per_ownership;
        $customer->price_per_ownership_in_word = $request->price_per_ownership_in_word;
        $customer->total_price = $request->total_price;
        $customer->total_price_in_word = $request->total_price_in_word;
        $customer->special_discount = $request->special_discount;
        $customer->special_discount_inword = $request->special_discount_inword;
        $customer->mode_of_payment = $request->mode_of_payment;
        $customer->booking_money = $request->booking_money;
        $customer->booking_money_inword = $request->booking_money_inword;
        $customer->booking_money_date = $request->booking_money_date;
        $customer->payment_type = $request->payment_type;
        $customer->no_o_installment = $request->no_o_installment;
        $customer->inst_permonth = round($request->inst_permonth);
        $customer->main_amount = $request->main_amount;
        $customer->agreed_amount = $request->agreed_amount;
        $customer->in_stallment_start = $request->in_stallment_start;
        $customer->in_stallment_to = $request->in_stallment_to;
        $customer->description = $request->description;
        $customer->nominee_name = $request->nominee_name;
        $customer->nominee_number = $request->nominee_number;
        $customer->relation_to_nominee = $request->relation_to_nominee;
        $customer->reference_name_a = $request->reference_name_a;
        $customer->reference_cell_numer_a = $request->reference_cell_numer_a;
        $customer->reference_name_b = $request->reference_name_b;
        $customer->reference_cell_numer_b = $request->reference_cell_numer_b;
        $customer->sales_person_id = $request->sales_person_id;
        $customer->teamleader_id = $request->teamleader_id;
        if ($request->file('user_image')) {
            $customer->user_image = $this->makeUserImg($request);
        }
        if ($request->file('nominee_image')) {
            $customer->nominee_image = $this->makeNomineeImg($request);
        }
        $customer->save();
        return redirect('/approve/customer')->with('success', 'Customer Updated Successfully');
    }
}