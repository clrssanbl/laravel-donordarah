<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view('admin.stockdarah', compact('stocks'));
    }
}
