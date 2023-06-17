<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\statistikController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\EditBarangController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\PreviewBarangController;
use App\Http\Controllers\HapusBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('statistik-toko');
// });

// Route::get('/statistik',[statistikController::class, 'show']);

Route::get('/', [homeController::class, 'landingPage']);
Route::get('/statistikPasar/{id}', [statistikController::class, 'statistikaPasar']);
Route::get('/statistikToko/{id}', [statistikController::class, 'statistikaToko']);
Route::get('/cariBarangHome', [homeController::class, 'cariBarangHome']);
Route::get('/cariTokoHome', [homeController::class, 'cariTokoHome']);
Route::get('/pengaturanAkun', [homeController::class, 'pengaturanAkun']);
Route::get('/etalaseTokoHome', [homeController::class, 'etalaseToko']);
Route::get('/hargaBarangHome', [homeController::class, 'hargaBarang']);
Route::get('/cariPasarHome', [homeController::class, 'cariPasarHome']);
Route::get('/cariToko', [TokoController::class, 'CariToko']);
Route::get('/cariBarang', [BarangController::class, 'CariBarang']);
Route::get('/informasiToko/{id}', [TokoController::class, 'showDetailToko']);
//Routing Log Out//
Route::get('logout',[SignOutController::class, 'logout'])->name('logout');

//Routing Lupa Password//
Route::get('forgot-password', [LupaPasswordController::class, 'forgotpassword']);
Route::post('forgot-password', [LupaPasswordController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [LupaPasswordController::class, 'reset']);
Route::post('reset/{token}', [LupaPasswordController::class, 'PostReset']);

//Routing Edit Barang//
Route::get('/barang/edit/{id}',[EditBarangController::class, 'edit']);
Route::post('/barang/update', [EditBarangController::class, 'update']);

//Routing Preview Barang//
Route::get('/barang/preview/{id}',[PreviewBarangController::class, 'view']);

//Routing Hapus Barang//
Route::get('/barang/hapus/{id}',[HapusBarangController::class, 'hapus']);
// Route::get('/informasiBarang', [homeController::class, 'informasiBarang']);

Route::get('/register', [SignUpController::class, 'register'])->name('register');
Route::post('/register', [SignUpController::class, 'registerPost'])->name('register');

Route::get('/informasitoko', [InformasiTokoController::class, 'melihatInfoToko']);

Route::get('/buattoko1', [TokoController::class, 'buattoko1'])->name('buattoko1');
Route::get('/buattoko2', [TokoController::class, 'buattoko2'])->name('buattoko2');
Route::get('/buattoko3', [TokoController::class, 'buattoko3'])->name('buattoko3');

Route::get('/informasihargabarang', [BarangController::class, 'showListHargaBarang'])->name('informasihargabarang');
Route::get('/informasibarang', [BarangController::class, 'showDetailBarang'])->name('informasibarang');

Route::get('/informasitoko', [TokoController::class, 'showDetailToko'])->name('informasitoko');
Route::get('/kontaktoko', [TokoController::class, 'showKontakToko'])->name('kontaktoko');
