<?php

namespace App\Http\Controllers;
use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = DB::table('beritas')->get();
       
        return view('berita',['berita'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('berita.createberita');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
        $request->validate([
            'gambar'=> 'mimes:jpg,jpeg,png|required',
            'judul' => 'required',
            'isi' => 'required' ,
                   ]);

        $name = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('/images'), $name);           
        Berita::create([
            'gambar'=> $name,
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect('berita/listberita')->with('status','Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $berita
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $beritas = Berita::all();
       
        return view('berita.listberita',compact('beritas'));
    }

    public function showbrt(Berita $berita)
    {
        //
        return view('berita.detailberita',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
        return view('edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
        $request->validate([
            'judul' => 'required',
            'isi' => 'required' ,
                   ]);
        Berita::where('id', $berita->id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi
                ]);
        return redirect('berita/listberita')->with('status','Berita berhasil diubah');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
        Berita::destroy($berita->id);
        return redirect('berita/listberita')->with('status','Berita berhasil dihapus');
    }
}
