<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;
class UsersController extends Controller
{
    public function usersList()
    {
        $users = DB::table('pengaduan')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}