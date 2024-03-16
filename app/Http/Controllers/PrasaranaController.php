<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Namespace yang sudah diperbaiki

class PrasaranaController extends Controller
{
    public function index()
    {
        $guru = DB::table('sapras')->get(); // Mendapatkan data seragam
        // dd($seragam);
        return view('home.sapras.index', compact('sapras'));
    }
}