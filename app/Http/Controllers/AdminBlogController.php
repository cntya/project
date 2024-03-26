<?php

namespace App\Http\Controllers;
use\App\Models\Blog;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource. 
     * 
     *
     * @return \Illuminate\Http\Response
     */
    // public function showBlog($id)
    // {
    //     $blog = blogs::find($id); // Mendapatkan data blog berdasarkan ID
    //     return view('blog.show', compact('blog')); // Meneruskan data blog ke tampilan 'show.blade.php'
    // // }

    public function index()
        {
            // $blog = DB::table('blogs')->get(); // Mendapatkan data seragam
            // dd($seragam);
            // return view('admin.posts.index');
            $blog= [

                'title'=>'Manajemen Service',
                'blog'=>DB::table('blogs')->get(),
                'content' => 'admin/posts/index'
            ];
            return view ('admin.layouts.wrapper', $blog);
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
            'content' => 'admin/blog/add'
        ];
        return view ('admin.layouts.wrapper', $data);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SimpanBl(Request $request)
    {
        DB::table('blogs')-> insert([
            'title'=>$request->title,
            'cover'=>$request->cover,
            'body'=>$request->body,
        ]);

		return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        //
        $data = [
            'title' => 'Tambah Blog',
            'content' => 'admin/posts/add'
        ];
        return view ('admin.layouts.wrapper', $data);
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