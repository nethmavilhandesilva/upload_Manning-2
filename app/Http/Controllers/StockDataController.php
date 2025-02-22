<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockDataWeb; 

class StockDataController extends Controller
{
    public function index()
    {
        // Fetch the stock data
        $stockData = StockDataWeb::all(); // Retrieves all records from stock_data_web table

        // Pass stockData to the view
        return view('dashboard', compact('stockData'));
    }
}
