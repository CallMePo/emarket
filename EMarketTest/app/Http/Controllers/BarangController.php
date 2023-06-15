<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function CariBarang(Request $request) {

        
        if ($request->has('search')) {
            $barangs = Barang::where('namaBarang', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $barangs = Barang::all();
        }

        return view('cari-barang', compact('barangs'));
    }
}
