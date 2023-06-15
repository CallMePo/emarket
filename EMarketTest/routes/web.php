<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\statistikController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/informasiBarang', [homeController::class, 'informasiBarang']);