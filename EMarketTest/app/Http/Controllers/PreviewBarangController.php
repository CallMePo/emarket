<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PreviewBarangController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $barang = DB::table('barang')->where('idBarang', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('previewbarang', ['barang' => $barang]);
    }
}
