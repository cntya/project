<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Namespace yang sudah diperbaiki

class SeragamController extends Controller
{
    public function index()
    {
        $seragam = DB::table('seragam')->get(); // Mendapatkan data seragam
        return view('home.tatatertib.index', ['seragam' => $seragam]);
    }
}