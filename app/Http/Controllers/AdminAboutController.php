<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    //
    public function indexA()
    {
        //
		$data = [
        
            'title'=>'Manajemen About',
            'about'=>DB::table('abouts')->get(),
            'content' => 'admin/about/index'
        ];
        // dd($data);
        return view ('admin.layouts.wrapper', $data);
    }

    public function tambahA()
    {
        //
        $data = [
            'title' => 'Tambah Service',
            'content' => 'admin/about/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    public function simpanA(Request $request){
        {
            $foto_file = $request->file('cover');
            $foto_ekstensi = $foto_file->getClientOriginalName();

            $foto_name = date('Y-m-d_H-i-s') . "-" .$foto_ekstensi;
            $foto_file->move(public_path('pos_abouts'), $foto_name);

        // dd($request->all());
                DB::table('abouts')-> insert([
                    'name'=>$request->name,
                    'desc'=>$request->desc,
                    'cover'=>$foto_name,
                  ]);
        
                return redirect('/admin/about');
            }
}
        public function hapus3($id){
            DB::table('abouts')->where('id',$id)->delete();
            return redirect('/admin/about');
}

}