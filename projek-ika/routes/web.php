<?php

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

Route::get('/','DashboardController@index');
Route::get('/users', function () {
    return view('users');
});


// Route untuk user 
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
        $data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
        $total_suratmasuk = \App\Masuk::all()->count();
		$total_suratkeluar = \App\Keluar::all()->count();
		$user = \App\User::all()->count();

        return view ('dashboard-user.beranda')->with('total_suratmasuk',$total_suratmasuk)->with('total_suratkeluar', $total_suratkeluar)->with('user', $user)->with('data', $data);
	});
});

// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::get('/', 'ProsesController@index');
    
    //artikal


});

//edit profile

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@edit')
        ->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')
        ->name('profile.update');
});

//edit password



Auth::routes();

// Route::get('/tambahmasuk', function () {
//     return view('masuk');
// });
// Route::get('/tambahkeluar', function () {
//     return view('keluar');
// });
Route::post('/buat_surat/proses','ProsesController@buat_surat');
Route::post('/buat_surat_keluar/proses','ProsesController@buat_surat_keluar');
Route::get('/suratmasuk','ProsesController@suratmasuk');
Route::get('/masuk_edit/{id}','ProsesController@masuk_edit');
Route::post('/simpan_masuk','ProsesController@simpan_masuk');
Route::get('/hapus/{id}','ProsesController@hapus_masuk');
Route::get('/suratmasuk','ProsesController@suratmasuk');


Route::get('/suratkeluar','ProsesController@suratkeluar');
Route::post('/tambah/keluar','ProsesController@tambah_keluar');
Route::get('/keluar_edit/{id}','ProsesController@keluar_edit');
Route::get('/hapus_keluar/{id}','ProsesController@hapus_keluar');

Route::post('/simpan_keluar','ProsesController@simpan_keluar');



///////////////////////////////////////////////////////////////////////////////////////////

Route::get('/tambahmasuk', function () {
    return view('dashboard-admin.tambah-surat-masuk');
});

Route::get('/tambahkeluar', function () {
    return view('dashboard-admin.tambah-surat-keluar');
});



//admin

Route::get('/changePassword','ProsesController@showChangePasswordForm');
Route::post('/changePassword','ProsesController@changePassword')->name('changePassword');



Route::get('users-list', 'UsersController@usersList'); 



Route::get('/cobatable', function () {
    return view('cobatable');
});

Route::get('/konten', function () {
    return view('dashboard-user.konten');
});


Route::get('/konten','ArtikelController@konten');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.detail');
 
//lap
Route::get('/lapmasuk_adm','ProsesController@lapmasuk_adm');
Route::get('/lapkeluar_adm','ProsesController@lapkeluar_adm');
Route::get('/lapmasuk','ProsesController@lapmasuk_us');
Route::get('/lapkeluar','ProsesController@lapkeluar_us');
Route::get('/pengguna','PenggunaController@pengguna');
Route::get('/pengguna/hapus/{id}','PenggunaController@penggunadelete');

//blog

Route::resource('artikel', 'ArtikelController');
Route::get('/kategori-artikel', 'KategoriController@index')->name('kategori-artikel');
Route::get('/artikel-blog', 'ArtikelController@dataArtikel')->name('artikel-blog');


Route::post('/kategori-artikel/store', 'KategoriController@store')->name('kategori-artikel.store');
Route::get('/tambah-artikel', 'ArtikelController@create')->name('tambah-artikel'); 
Route::post('/kategori-artikel/update', 'KategoriController@update')->name('kategori-artikel.update');
 Route::get('/edit-kategori/{id}', 'KategoriController@edit')->name('edit-kategori');
Route::get('/hapus-kategori/{id}', 'KategoriController@destroy')->name('hapus-kategori');
Route::get('/hapus-artikel/{id}', 'ArtikelController@destroy')->name('hapus-artikel');
