<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SupplierController extends Controller
{
    public function index(){
        $data_supplier = Supplier::all();
        return view('supplier', compact('data_supplier'));
    }
}
