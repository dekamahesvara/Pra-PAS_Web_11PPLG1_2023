<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataLaptop;

class DataLaptopController extends Controller
{
    public function index(){
        return view('datalaptop.datalaptop',[
            "title" => "Data Laptop",
            "data_laptops" => DataLaptop::all()
        ]);
    }

    public function detail($id) {
        $data_laptops = DataLaptop::find($id);
        return response()->json($data_laptops);
    }
}
