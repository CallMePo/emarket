<?php

namespace App\Http\Controllers;

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

        
        return view('harga-barang-home');
        
    }

    public function landingPage()
    {

        return view('index');
    }


    // public function informasiBarang() {

    //     return view('cari-barang');
        
    // }
}
