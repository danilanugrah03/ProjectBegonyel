<?php

namespace App\Http\Controllers;

use App\Models\Detailpemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index() {
        $pemesanan = Detailpemesanan::all();

        return view();
    }
}
