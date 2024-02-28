<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexS()
    {
        //
		$data = [
        
            'title'=>'Manajemen Service',
            'service'=>DB::table('services')->get(),
            'content' => 'admin/service/index'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambahS()
    {
        //
        $data = [
            'title' => 'Tambah Service',
            'content' => 'admin/service/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanS(Request $request){
    {
        // dd($request->all());
            DB::table('services')-> insert([
                'title'=>$request->title,
                'icon'=>$request->icon,
                'desc'=>$request->desc,
                
              ]);
    
            return redirect('/admin/service');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus2($id){
		DB::table('services')->where('id',$id)->delete();
		return redirect('/admin/service');
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
