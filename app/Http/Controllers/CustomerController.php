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
}
