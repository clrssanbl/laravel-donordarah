<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Goldar;
use App\Lokasi;
use App\Stock;
use App\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $donors = Donor::paginate(10);
        return view ('donor.listdonor')->with(compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        $goldar = Goldar::all();
        return view('donor')->with(
            compact('lokasi', 'goldar')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Donor::create([
            'userid' => auth()->user()->id,
            'goldarid' => $request->goldar,
            'umur' => $request->umur,
            'beratbadan' => $request->beratbadan,
            'penyakit' => $request->penyakit,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'status'=> 0,
        ]);

        return view('index');
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
        Donor::where('id',$id)->update([
            'status'=> 1
        ]);

        return back()->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donor::find($id)->delete();
        return back()->with('status', 'jangan donor, antum sakit');
    }

    public function selesai($id){
        Donor::where('id',$id)->update([
            'status'=> 2
        ]);
        
        $donor = Donor::where('id', $id)->first();
        $stock = Stock::where('goldarid', $donor->goldarid)->first();
        $currentstock = $stock->stockdarah+1;
        Stock::where('goldarid', $donor->goldarid)->update([
            'stockdarah' => $currentstock
        ]);
        return back()->with('status', 'Selesai');
    }
}
