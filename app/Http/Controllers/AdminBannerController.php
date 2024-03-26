<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahB()
    {
        //
        $data = [
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //simpan banner
	public function simpanB(Request $request){

        DB::table('banners')-> insert([
            'headline'=>$request->headline,
            'desc'=>$request->desc,
            'urutan'=>$request->urutan,
            'gambar'=>$request->gambar,
          ]);
          return redirect('/admin/banner');
	}
        


    public function store(Request $request)
    {
        //

        //upload gambar
        if ($request->gambar) {
            $gambar = $request->file('gambar');
            $file_name = time().'-'. $gambar->getOriginalName();

            $storage = 'uploads/banner';
            $gambar->move($storage, $file_name);
            $data['gambar'] =$storage.$file_name;
        }else{
            $data['image'] = null;
        }

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
    public function hapus1($id){
		DB::table('banners')->where('id',$id)->delete();
		return redirect('/admin/banner');
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     //edit user
    public function edit($id){
       //
       $data = [
        'title'     => 'Edit Banner',
        'banner'    => Banner::find($id),
        'content'   => 'admin/banner/add'
       ];
       return view('admin.layouts.wrapper', $data);
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
        $banner = Banner::find($id);
        $banner->delete();
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect('/admin/banner');
    }
    
}