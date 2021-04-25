<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Goldar;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('userview.listuser')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userview.createuser');
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
            'name'=> 'required',
            'email' => 'required',
            'password' => 'required' ,
            'role' => 'required' ,
        ]);

        User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),            
            'role' => $request->role,
        ]);

        return redirect('/dashboard')->with('status','user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $donor = Donor::where('userid', $id)->first();
        return view('profile', compact('user', 'donor'));
    }

    public function rs($id){
        $rs = User::where('id', $id)->first();
        $goldar = Goldar::all();
        return view('rs.rsdashboard', compact('rs', 'goldar'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
	User::destroy($user->id);
        return redirect('/dashboard')->with('status','user berhasil dihapus');
    }
}
