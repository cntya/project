<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/about', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/services', function () {
    // return view('home.index');
    $services = DB::table('services')->get();
    // dd($services);
    $data = [
        'content' => 'home/services/index'
    ];
    return view('home.layouts.wrapper', $data, compact('services'));
});

Route::get('/blog', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/kegiatan/eskul/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/galery', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/kegiatan/galery/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/dataguru', function () {
    // return view('home.index');
    $guru = DB::table('data_guru')->get(); // Mendapatkan data seragam
    $data = [
        'content' => 'home/dataguru/index'
    ];
    return view('home.layouts.wrapper', $data, compact('guru'));
});

Route::get('/tatatertib', function () {
    // return view('home.index');
    $seragam = DB::table('seragam')->get(); // Mendapatkan data tatatertib
    $data = [
        'content' => 'home/tatatertib/index'
    ];
    return view('home.layouts.wrapper', $data, compact('seragam'));
});

Route::get('/prasarana', function () {
    // return view('home.index');
    $sapras = DB::table('sapras')->get(); // Mendapatkan data sapras
    $data = [
        'content' => 'home/prasarana/index'
    ];
    return view('home.layouts.wrapper', $data, compact('sapras'));
});

Route::get('/contact', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});

//halaman login
Route::get('/login', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::post('/login_user', 'App\Http\Controllers\AdminUserController@authenticate');


// login admin
Route::prefix('/admin')->group(function (){
    Route::get('/dashboard', function(){

        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
});

});


Route::prefix('/admin')->group(function (){
    Route::get('/user', function(){

        $data = [
            'content' => 'admin/user/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });


});

Route::prefix('/admin')->group(function (){
    Route::get('/user/create',function(){

        $data = [
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper',$data);
    });
});

// 


//users
Route::get('/admin/user', 'App\Http\Controllers\AdminUserController@indexU');
Route::post('/user/simpan','App\Http\Controllers\UserController@simpanU');
Route::get('/user/tambah', 'App\Http\Controllers\UserController@tambah');
Route::get('/user/hapus/{id}', 'App\Http\Controllers\UserController@hapus');



//banners
Route::get('/admin/banner', 'App\Http\Controllers\UserController@indexB');
Route::get('/admin/banner/create', 'App\Http\Controllers\UserController@tambahB');
Route::post('/admin/banner/create', 'App\Http\Controllers\UserController@simpanB');
Route::post('/banner/simpan','App\Http\Controllers\UserController@simpanB');
Route::get('/banner/hapus/{id}', 'App\Http\Controllers\AdminBannerController@hapus1');


//service
Route::get('/admin/service', 'App\Http\Controllers\AdminServiceController@indexS');
Route::get('/admin/service/create', 'App\Http\Controllers\AdminServiceController@tambahS');
Route::post('/service/simpan','App\Http\Controllers\AdminServiceController@simpanS');
Route::get('/service/hapus/{id}', 'App\Http\Controllers\AdminServiceController@hapus2');

//about
Route::get('/admin/about', 'App\Http\Controllers\AdminAboutController@indexA');
Route::get('/admin/about/create', 'App\Http\Controllers\AdminAboutController@tambahA');
Route::post('/about/simpan','App\Http\Controllers\AdminAboutController@simpanA');
Route::get('/about/hapus/{id}', 'App\Http\Controllers\AdminAboutController@hapus3');
//kategori
Route::get('/posts/kategori', 'App\Http\Controllers\AdminKategoriController@index');


//blog
Route::get('admin/posts/blog','App\Http\Controllers\AdminBlogController@index');
Route::post('admin/posts/simpan','App\Http\Controllers\AdminBlogController@simpanBl');
Route::get('admin/posts/add','App\Http\Controllers\AdminBlogController@tambah');

//dev
Route::get('/admin/dev', 'App\Http\Controllers\DeveloperController@index');

//seragam
Route::get('/home/tatatertib', 'App\Http\Controllers\SeragamController@index');
// Route::get('/tatatertib/tambah', 'App\Http\Controllers\SeragamController@tambah');
// Route::post('/tatatertib/simpan','App\Http\Controllers\SeragamController@simpan');