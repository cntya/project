<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Namespace yang sudah diperbaiki

class GuruController extends Controller
{
    public function index()
    {
        $guru = DB::table('guru')->get(); // Mendapatkan data seragam
        // dd($seragam);
        return view('home.dataguru.index', compact('guru'));
    }
}