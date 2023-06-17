<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class EditBarangController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $barang = DB::table('barang')->where('id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editbarang', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        // update data barang
        DB::table('barang')->where('', $request->id)->update([
            'namaBarang' => $request->nama,
            'hargaBarang' => $request->harga,
            'deskripsiBarang' => $request->deskripsi,
            'fotoBarang' => $request->foto,

        ]);
        // alihkan halaman ke halaman barang
        return redirect()->action(
            [PreviewBarangController::class, 'view'], [$request->id],
        );
    }
}
