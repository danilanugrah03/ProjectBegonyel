<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
// show add form
    public function create(){
        return view('backend.user.add');
    }
// insert data to table
    public function store(Request $request){
// data yang akan diterima function store
 $name = $request->name;
 $email = $request->email;
 $jk = $request->jk;
 $level = $request->level;
 $no_telp = $request->no_telp;
 $password = Hash::make ($request->password);
// dd($request->all())
//  buat object untuk simpan data ke table
$user = new User;

// kirim nilai2 yg didapat dari form ke table
$user->name = $name;
$user->email = $email;
$user->jk = $jk;
$user->level = $level;
$user->no_telp = $no_telp;
$user->password = $password;

// simpan data yg telah diterima ke dalam table
$user->save();

return redirect('users');
}

public function edit($id) {
$user = User::find($id);
// dd($user);


// tampilkan form edit dan kirim datanya
return view('backend.user.edit', compact('user') );
}

// insert data to table
public function update(Request $request){
    // data yang akan diterima function store
     $id = $request->id;
     $name = $request->name;
     $email = $request->email;
     $jk = $request->jk;
     $level = $request->level;
     $no_telp = $request->no_telp;
     
    // dd($request->all())
    //  buat object untuk simpan data ke table
    $user = User::find($id);
    
    // kirim nilai2 yg didapat dari form ke table
    $user->name = $name;
    $user->email = $email;
    $user->jk = $jk;
    $user->level = $level;
    $user->no_telp = $no_telp;
    
    
    // simpan data yg telah diterima ke dalam table
    $user->save();
    
    return redirect('users');
    }
    

public function delete($id) {
$user = User::delete($id);
}
}
