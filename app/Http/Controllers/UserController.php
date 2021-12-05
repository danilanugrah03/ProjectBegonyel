<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        // ambil data dari tabel users
        // eloquent (menggunakan model)
        $users = User::all();
        // dd($users);
        // query builder

        // $users = DB::table('users')->get();
        
        return view('backend.user.index',[
        'users' => $users,
        ]);
    }
}
