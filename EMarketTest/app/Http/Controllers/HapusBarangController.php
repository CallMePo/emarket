<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HapusBarangController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('barang')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/aturetalasetoko');
    }
}
