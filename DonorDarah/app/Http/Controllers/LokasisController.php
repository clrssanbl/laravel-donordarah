<?php

namespace App\Http\Controllers;
use App\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lokasi = Lokasi::all();
       
        return view('lokasi',['lokasi'=>$lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lokasi.createlokasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required' ,
                   ]);
           
       Lokasi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('lokasi/listlokasi')->with('status','Lokasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
         $lokasis = Lokasi::all();
       
        return view('lokasi.listlokasi',compact('lokasis'));
    }

    public function showlks(Lokasi $lokasi)
    {
        //
        return view('lokasi.detaillokasi',compact('lokasi'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokasi $lokasi)
    {
        //
        return view('editlokasi', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        //
         //
         
         $request->validate([
            'nama' => 'required',
            'alamat' => 'required' ,
                   ]);
        
        Lokasi::where('id', $lokasi->id)
                ->update([
                    'nama' => $request->nama,
            'alamat' => $request->alamat,
                ]);
        return redirect('lokasi/listlokasi')->with('status','Lokasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        //
        Lokasi::destroy($lokasi->id);
        return redirect('lokasi/listlokasi')->with('status','Lokasi berhasil dihapus');
    }
}
