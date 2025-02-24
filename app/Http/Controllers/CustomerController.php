<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
    
        // Pass the students to the view
        return view('customers.index', compact('customers'));
    }   
    public function create(){
        return view('customers.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'Name' => 'required',
            'Emp_ID' => 'required',
            'Address' => 'required',
            'Phone_No' => 'required'
        ]);
        //Save to database
        $customer = Customer::create($validated);
        return redirect()->route('customer.index')->with('success', 'Customer added successfully!');
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }
    public function update(Customer $customer, Request $request){
        $data = $request->validate([
            'Name'=>'required',
            'Emp_ID'=>'required|numeric',
            'Address'=>'required|numeric',
            'Phone_No'=>'required|numeric',
        ]);
        $customer->update($data);
        return redirect(route('customer.index'))->with('success','Customer Updated Successffully');
    }
    //Delete
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect(route('customer.index'))->with('success','Customer Deleted Successffully');
    }
}
