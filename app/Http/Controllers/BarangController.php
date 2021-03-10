<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;


class BarangController extends Controller
{
    public function index(){
        $data_barang = Barang::all();
        return view('barang', compact('data_barang'));
    }
}
