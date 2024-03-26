<?php

namespace App\Http\Controllers;
use\App\Models\Kategori;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = [
        
            'title'=>'Manajemen Kategori',
            'kategori'=>DB::table('kategoris')->get(),
            'content' => 'admin/posts/kategori/index'
        ];
        // dd($data);
        return view ('admin.layouts.wrapper', $kategori);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $data = [
            'title' => 'Tambah Blog',
            'content' => 'admin/posts/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
       
        //
        $data = [
            
            'title' => 'Tambah Kategori',
            'content' => 'admin/posts/kategori/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        DB::table('kategoris')-> insert([
            'name'=>$request->name,
          ]);

		return redirect('/admin/posts/kategori');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id){
        DB::table('kategoris')->where('id',$id)->delete();
        return redirect('/admin/posts/kategori');
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