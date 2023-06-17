<?php

namespace App\Http\Controllers;

use App\Models\toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function CariToko(Request $request) {


        if ($request->has('search')) {
            $tokos = toko::where('namaToko', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $tokos = toko::all();
        }

        return view('cari-toko-2', compact('tokos'));
    }

    public function showDetailToko($id)  {
        $toko = toko::find($id);
        return view('informasi-toko', compact('toko'));
    }
    public function showDetailToko(){
        return view('informasitoko');
    }

    public function showKontakToko(){
        return view('kontaktoko');
    }
}
