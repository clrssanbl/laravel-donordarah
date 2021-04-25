<?php

namespace App\Http\Controllers;
use App\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class AppController extends Controller
{
    //
    public function search(Request $request){
        $search = Lokasi::when($request->q, function ($query) use ($request) {
                  $query->where('nama', 'LIKE', "%{$request->q}%")
                        ->orWhere('alamat', 'LIKE', "%{$request->q}%");
                  })->paginate(8);
        $search->appends($request->only('q'));
        return view('hasillks', compact('search'));
        
        if(!$search->isEmpty()) {
            return view('hasillks', compact($search));
         }  else {
            abort(404);
         } 
    }
}
