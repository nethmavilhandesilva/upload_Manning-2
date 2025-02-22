<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockDataWeb; // Import your model

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::all(); // Fetch all warehouses from the database
        return view('dashboard', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function dashboard()
{
    $stockData = StockDataWeb::all(); // Retrieve all data from the stock_data_web table

    return view('dashboard', compact('stockData')); // Pass the data to the view
}
}
