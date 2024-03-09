<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
	//index user
	public function index()
	{
		$user=DB::table('users')->get();
		return view('admin.user.index',['user' => $user]);
		return view ('admin.layouts.wrapper', $data);
    }

	//index banner
	public function indexB()
    {
        //
		$data = [
        
            'title'=>'Manajemen Banner',
            'banner'=>DB::table('banners')->get(),
            'content' => 'admin/banner/index'
        ];
        return view ('admin.layouts.wrapper', $data);
    }
	

	//tambah banner
	public function tambahB()
    {
        //
        $data = [
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

	//simpan user
	public function simpanU(Request $request){

        DB::table('users')-> insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
          ]);

		return redirect('/admin/user');
	}


	//Simpan banner
	public function simpanB(Request $request){
        
        $foto_file = $request->file('gambar');
        $foto_ekstensi = $foto_file->getClientOriginalName();

        $foto_name = date('Y-m-d_H-i-s') . "-" .$foto_ekstensi;
        $foto_file->move(public_path('photos'), $foto_name);
        dd($request->all() );

        DB::table('banners')-> insert([
            'headline'=>$request->headline,
            'desc'=>$request->desc,
			'urutan'=>$request->urutan,
            'gambar'=>$foto_name,
          ]);

		return redirect('/admin/banner');
	}
    
	// untuk hapus data
	public function hapus($id){
		DB::table('users')->where('id',$id)->delete();
		return redirect('/admin/user');
	}
}