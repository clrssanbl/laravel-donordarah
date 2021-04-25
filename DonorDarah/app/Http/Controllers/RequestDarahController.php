<?php

namespace App\Http\Controllers;

use App\RequestDarah;
use App\Stock;
use Illuminate\Http\Request;

class RequestDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = RequestDarah::all();
        return view('admin.managerequest', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestdarah = new RequestDarah();
        $requestdarah -> userid = auth()->user()->id;
        $requestdarah -> goldarid = $request->goldar;
        $requestdarah -> jumlah = $request->qty;
        $requestdarah -> save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = RequestDarah::where('id', $id)->first();
        $stock = Stock::where('goldarid', $req->goldarid)->first();
        $currentstock = $stock->stockdarah-$req->jumlah;
        Stock::where('goldarid', $req->goldarid)->update([
            'stockdarah' => $currentstock
        ]);

        RequestDarah::where('id', $id)->update([
            'status' => 1
        ]);


        return back()->with('status', 'Selesai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
