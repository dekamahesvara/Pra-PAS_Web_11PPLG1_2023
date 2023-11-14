<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        return view('pelanggan.pelanggan',[
            "title" => "Pelanggan",
            "pelanggans" => Pelanggan::all()
        ]);
    }

    public function detail($id) {
        $pelanggans = Pelanggan::find($id);
        return response()->json($pelanggans);
    }
}
