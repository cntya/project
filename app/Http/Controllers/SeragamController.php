<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Namespace yang sudah diperbaiki

class SeragamController extends Controller
{
    public function index()
    {
        $seragam = DB::table('seragam')->get(); // Mendapatkan data seragam
        // dd($seragam);
        return view('home.tatatertib.index', compact('seragam'));
    }

    // public function Simpan(Request $request)
    // {
    //     DB::table('seragam')-> insert([
    //         'hari'=>$request->hari,
    //         'pakaian'=>$request->pakaian,
           
    //       ]);

	// 	return redirect('/admin/user');
    // }

    // public function create()
    // {  
         
    //     $data = [
    //         'title' => 'Tambah Blog',
    //         'content' => 'admin/blog/add'
    //     ];
    //     return view ('admin.layouts.wrapper', $data);
    // }
}