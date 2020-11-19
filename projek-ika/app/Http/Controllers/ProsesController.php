<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengaduan;
use App\Masuk;
use App\Keluar;

use App\Grafik;
use App\Jawaban;
use File;
use Hash;
use Auth;
use PDF; 
use App\User;

class ProsesController extends Controller
{
    public function tambahmasuk(Request $request){
    $this->validate($request, [
		'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
	]);

 
	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('file');

	$nama_file = time()."_".$file->getClientOriginalName();

    // isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';
	$file->move($tujuan_upload,$nama_file);

	// insert data ke table pengaduan
	$simpan = Masuk::create([
		'no_surat' => $request->no_surat,
		'asal_surat' => $request->asal_surat,
		'tgl_masuk' => $request->tgl_masuk,
		'tertuju' => $request->tertuju,
		'perihal' => $request->perihal,
		'file' => $nama_file,
	]);

	// alihkan halaman ke halaman home
	return redirect('/suratmasuk')->with('sukses','Data berhasil ditambahkan');

	}

	public function showChangePasswordForm(){
        return view('auth.changepassword');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi yang Anda berikan. Silakan coba lagi.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Kata sandi baru tidak boleh sama dengan kata sandi Anda saat ini. Silakan pilih kata sandi yang berbeda.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Kata sandi berhasil diubah!");

    }

    //////////////////////////////////////////////////////////////////////////


    public function suratmasuk(){
		$masuk = \App\Masuk::all()->sortByDesc("created_at");
		return view('dashboard-admin.suratmasuk',['masuk' => $masuk]);
	}
    public function buat_surat(Request $request){
    $this->validate($request, [
		'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
	]);
	// menyimpan data file yang diupload ke variabel $file
	$file = $request->file('file');
	$nama_file = time()."_".$file->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';
	$file->move($tujuan_upload,$nama_file);
	// insert data ke table masuk
	$simpan = Masuk::create([
		'no_surat' => $request->no_surat,
		'asal_surat' => $request->asal_surat,
		'tgl_masuk' => $request->tgl_masuk,
		'tertuju' => $request->tertuju,
		'perihal' => $request->perihal,
		'file' => $nama_file,
	]);
	// alihkan halaman ke halaman home
	return redirect('/suratmasuk')->with('sukses','Data berhasil ditambahkan');
	}

	public function masuk_edit($id)
    {
        $masuk = DB::table('masuk')->where('id',$id)->get();
        return view('dashboard-admin.edit-surat-masuk',['masuk' => $masuk]);
    } 
    public function simpan_masuk(Request $request)
    {
        $masuk = DB::table('masuk')->where('id',$request->id)->update([
		'no_surat' => $request->no_surat,
		'asal_surat' => $request->asal_surat,
		'tgl_masuk' => $request->tgl_masuk,
		'tertuju' => $request->tertuju,
		'perihal' => $request->perihal,
		]);
        return redirect('/suratmasuk')->with('sukses','Data berhasil disunting');
    }
    public function hapus_masuk($id)
    {
       $masuk = Masuk::find($id);
       $masuk->delete();
        return redirect('/suratmasuk')->with('sukses','Data berhasil dihapus');
    } 


	//surat keluar
	public function buat_surat_keluar(Request $request){
		$simpan = Keluar::create([
			'no_surat' => $request->no_surat,
			'tgl_keluar' => $request->tgl_keluar,
			'tertuju' => $request->tertuju,
			'alamat_surat' => $request->alamat,
			'perihal' => $request->perihal,
		]);
		// alihkan halaman ke halaman home
		return redirect('/suratkeluar')->with('sukses','Data berhasil ditambahkan');
		}
	
    public function suratkeluar(){
		$masuk = \App\Keluar::all()->sortByDesc("created_at");
		return view('dashboard-admin.suratkeluar',['masuk' => $masuk]);
	}
	public function keluar_edit($id)
    {
        $keluar = DB::table('keluar')->where('id',$id)->get();

        return view('dashboard-admin.edit-surat-keluar',['keluar' => $keluar]); 
    } 
    public function hapus_keluar($id)
    {
       $masuk = Keluar::find($id);
       $masuk->delete();
        return redirect()->back();
    } 
    public function simpan_keluar(Request $request)
    {
        $masuk = DB::table('keluar')->where('id',$request->id)->update([
		'no_surat' => $request->no_surat,
		'tgl_keluar' => $request->tgl_keluar,
		'tertuju' => $request->tertuju,
		'alamat_surat' => $request->alamat,
		'perihal' => $request->perihal,
		]);
        return redirect('/suratkeluar')->with('sukses','Data berhasil disunting');
	}
	
	public function tambah_keluar(Request $request){
	
		// insert data ke table masuk
		$simpan = Keluar::create([
			'no_surat' => $request->no_surat,
			'tgl_keluar' => $request->tgl_keluar,
			'tertuju' => $request->tertuju,
			'alamat_surat' => $request->alamat_surat,
			'perihal' => $request->perihal,
			
		]);
	
		// alihkan halaman ke halaman home
		return redirect('/suratkeluar')->with('sukses','Data berhasil ditambahkan');
		}
		public function cetaklap(){
			return view('cetaklap');
		}

		//hitung
		public function index() {       
        $total_suratmasuk = Masuk::all()->count();
		$total_suratkeluar = Keluar::all()->count();
		$user = User::all()->count();
        return view ('dashboard-admin.beranda')->with('total_suratmasuk',$total_suratmasuk)->with('total_suratkeluar', $total_suratkeluar)->with('user', $user);
    }
//lapmasuk admin
public function lapmasuk_adm(){
	$masuk = \App\Masuk::all()->sortByDesc("created_at");
	return view('dashboard-admin.lapmasuk',['masuk' => $masuk]);
}

//lapkeluar admin
public function lapkeluar_adm(){
	$keluar = \App\Keluar::all()->sortByDesc("created_at");
	return view('dashboard-admin.lapkeluar',['keluar' => $keluar]);
}

//lapmasuk admin
public function lapmasuk_us(){
	$masuk = \App\Masuk::all()->sortByDesc("created_at");
	return view('dashboard-user.surat-masuk',['masuk' => $masuk]);
}

//lapkeluar admin
public function lapkeluar_us(){
	$keluar = \App\Keluar::all()->sortByDesc("created_at");
	return view('dashboard-user.surat-keluar',['keluar' => $keluar]);
}

}
