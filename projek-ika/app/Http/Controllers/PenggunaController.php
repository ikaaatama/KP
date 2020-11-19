<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserRole;
use Hash;



class PenggunaController extends Controller
{
    public function pengguna()
    {
        
        $users = User::all();
        
        return view('dashboard-admin.pengguna', compact('users'));
  
    }
   



    public function penggunadelete($id)
    {
        User::where('id',$id)->delete();

        return redirect('/pengguna')->with('sukses', 'Data berhasil dihapus!');
    }

 


   
}