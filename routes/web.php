<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;

use App\Models\Barang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return ('ini halaman about');
});

Route::get('/contact', function () {
    return ('ini halaman contact');
});

Route::get('/biodata', function () {
    return "Nama Depan : Luthfi" . "<br>". 
           "Nama Belakang : Adya Pratama" . "<br>".
           "Tanggal Lahir : 16 April 2008" . "<br>".
           "Jenis Kelamin : Pria" . "<br>".
           "Agama : Islam" . "<br>".
           "Alamat : Kp.Bojong Tanjung" . "<br>".
           "Telepon : 0895410360197" . "<br>";
});
Route::get('biodata2/{depan}/{belakang}/{ttl}/{jk}/{agama}/{alamat}/{telepon}', function ($depan,$belakang,$ttl,$jk,$agama,$alamat,$telepon) {
    return "Nama Depan : $depan" . "<br>". 
           "Nama Belakang : $belakang" . "<br>".
           "Tanggal Lahir : $ttl" . "<br>".
           "Jenis Kelamin : $jk" . "<br>".
           "Agama : $agama" . "<br>".
           "Alamat : $alamat" . "<br>".
           "Telepon : $telepon" . "<br>";
});
Route::get('aritmatika/{b1}/{b2}', function ($b1,$b2){

    $penjumlahan = $b1 + $b2;
    $pengurangan = $b1 - $b2;
    $perkalian = $b1 * $b2;
    $pembagian = $b1 / $b2;
    return "Bilangan 1 : $b1"."<br>".
           "Bilangan 2 : $b2"."<br>".
           "Penjumlahan : $penjumlahan"."<br>".
           "Pengurangan : $pengurangan"."<br>".
           "Perkalian : $perkalian"."<br>".
           "Pembagian : $pembagian"."<br>";
});

Route::get('murid', function (){
    $data_murid = ["Maji","Malik","Danid","Agus",];
    $data_kelas = ["XI RPL 1", "XI RPL 2", "XI RPL 3"];
    return view('halaman_murid', compact('data_murid','data_kelas'));
});

Route::get('/post', [PostsController::class, 'menampilkan']);

Route::get('barang', function (){
    $barangs = Barang::all();

    return view('tampil_barang', compact('barangs'));
});

Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('registrasi', RegistrasiController::class);
Route::resource('buku', BukuController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('telepon', TeleponController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('obat', ObatController::class);
Route::resource('transaksi', TransaksiController::class);


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');