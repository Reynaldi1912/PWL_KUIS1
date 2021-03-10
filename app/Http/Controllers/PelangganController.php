<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;


class PelangganController extends Controller
{
    public function index(){
        $data_pelanggan = Pelanggan::all();
        return view('pelanggan', compact('data_pelanggan'));
    }
}
