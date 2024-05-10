<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expense = Expense::all();
        return view('backEnd.expense.expenseList',compact('expense'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $customer = Customer::all();
        return view('backEnd.expense.addExpense',compact('category','customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'amount' => 'required',
            'date' => 'required',
            'currency' => 'required',
        ]);
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = 'backEndAsset/expenseFile/'.uniqid().'.'.$extension;
            $request->file('file')->move('backEndAsset/expenseFile',$fileName);
        }
        $expense = new Expense();
        $expense->customer_id = $request->customer_id;
        $expense->category_id  = $request->category_id ;
        $expense->name = $request->name;
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->note = $request->note;
        $expense->file = $fileName;
        $expense->currency = $request->currency;
        $expense->payment_mode = $request->payment_mode;
        $expense->save();
        return to_route('expense.index')->with('success','Expense Created Successfully');
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
