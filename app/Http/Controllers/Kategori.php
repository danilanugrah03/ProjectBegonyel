<?php

namespace App\Http\Controllers;

use App\Models\Kategori as ModelsKategori;
use Illuminate\Http\Request;

class Kategori extends Controller
{
    //
    public function index() {
        $kategori = ModelsKategori::all();

        return view ('backend.kategori.index',[
        'Kategori' => $kategori,
        ]);
    }

    public function create() {
return view ('backend.kategori.add');
    }
    
    public function store(Request $request){
        

        $request->validate(
            ['name' => 'required|min:3']
        );
        ModelsKategori::create([
            'nama_kategori' => $request->name
        ]);
    }

    public function edit($id) {
        $kategori = ModelsKategori::find($id);

        return view('backend.kategori.edit', compact('kategori'));
    }
    public function update(Request $request){
        // data yang akan diterima function store
         $id = $request->id;
         $name = $request->name;

         $kategori = ModelsKategori::find($id);

         $kategori->nama_kategori =$name;

         $kategori->save();

         return redirect('kategori');
    }

         public function delete($id) {
        ModelsKategori::find($id)->delete();

        return redirect('kategori');
         }
    
}