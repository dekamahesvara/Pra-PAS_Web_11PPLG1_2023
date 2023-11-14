<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index(){
        return view('pesanan.pesanan',[
            "title" => "Pesanan",
            "pesanans" => Pesanan::all()
        ]);
    }

    public function detail($id) {
        $pesanans = Pesanan::find($id);
        return response()->json($pesanans);
    }
}
