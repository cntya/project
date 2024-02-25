<?php

namespace App\Http\Controllers;

use Illuminate\Models\User;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // // dd($request->password);
        // $oke = Hash::make('123456');
        // echo $oke;
        // exit;

        //echo $request->email;exit;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        //$credentials = $request->only('email','password');
        // dd($request);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
         //dd($infologin); exit;

        if (Auth::attempt($infologin)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }else{
            dd('gagal');
        //     return back()->with('loginError', 'Login Gagal !!!');
        }
        // dd('berhasil login');
    }

    public function indexU()
    {
        //
        $data = [
        
            'title'=>'Manajemen User',
            'user'=>DB::table('users')->get(),
            'content' => 'admin/user/index'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah User',
            'content' => 'admin/user/add'
        ];
        return view ('admin.layouts.wrapper', $data);
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
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        Banner::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        return redirect('/admin/banner');
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

    //  //edit user
    // public function edit($id){
    //     //mengambil data berdasarkan id yang dipilih
    //     $user = DB::table('users')->where('id',$id)->get();


    //     return view('admin.layouts.wrapper', $data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
