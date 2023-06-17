<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\toko;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function cariBarangHome() {
        return view('cari-barang-home');
        
    }

    public function cariTokoHome() {
        return view('cari-toko-home');
        
    }

    public function pengaturanAkun() {
        return view('pengaturan-akun');
        
    }

    public function etalaseToko() {
        return view('etalase-toko-home');
        
    }

    public function cariPasarHome() {
        return view('cari-pasar-home');
        
    }

    public function hargaBarang() {
        $barang1 = Barang::find(1);
        $barang2 = Barang::find(2);
        $barang3 = Barang::find(3);
        $barang4 = Barang::find(4);
        
        return view('harga-barang-home', compact('barang1', 'barang2', 'barang3', 'barang4'));
        
    }

    public function landingPage()
    {

        return view('index');
    }


    // public function informasiBarang() {

    //     return view('cari-barang');
        
    // }
}
