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
            // dd($request->all());
                DB::table('abouts')-> insert([
                    'name'=>$request->name,
                    'desc'=>$request->desc,
                    'cover'=>$request->cover,
                  ]);
        
                return redirect('/admin/about');
            }
}
        public function hapus3($id){
            DB::table('abouts')->where('id',$id)->delete();
            return redirect('/admin/about');
}

}