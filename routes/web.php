<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
//user
use App\Http\Controllers\UserBeliController;
//Admin Controller
use App\Http\Controllers\JamuController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\AdminAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfilController;



use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;


Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/login', [LoginController::class, 'login'])->name('Login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//register
Route::get('/register', [LoginController::class, 'register'])->name('Register');
Route::post('/registerPost', [LoginController::class, 'postRegister'])->name('postRegister');


Route::group(['middleware' => 'cekLogin'], function() {
    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    */
    Route::get('/home-user', function () {
        return view('user.home-user');
    });
    Route::get('/profil', [UserBeliController::class, 'profil']);
    Route::get('/jamu', [userBeliController::class, 'artikelJamu']);
    Route::get('/jamu/{id}', [userBeliController::class, 'artikelSpesifik']);
    
    //Komen dan Masukan
    Route::get('/contact', function () {
        return view('user.contact');
    });
    Route::post('/komen', [userBeliController::class, 'komenStore']);
    
    //Beli dan Keranjang Jamu
    Route::get('/belijamu', [userBeliController::class, 'daftarJamu']);
    Route::get('/belijamu/{id}/beli', [userBeliController::class, 'beli']);
    Route::post('/belijamu/{id}', [userBeliController::class, 'store'])->name('belijamu.store');
    Route::get('/keranjang', [userBeliController::class, 'keranjang']);
    Route::delete('/keranjang/{id}', [userBeliController::class, 'keranjangHapus']);
    Route::get('/keranjangKonfirmasi', [userBeliController::class, 'keranjangKonfirmasi']);


    /*
    |--------------------------------------------------------------------------
    | Admin
    |--------------------------------------------------------------------------
    */
    //admin
    Route::get('/home-admins', [AdminAdminController::class, 'home']);
    Route::resource('jamu-admins', JamuController::class);

    //artikel
    Route::resource('artikel-admins', ArtikelController::class);

    //Pengeluaran
    Route::resource('pengeluaran-admins', PengeluaranController::class);

    //Komen
    Route::resource('komen-admins', KomenController::class);

    Route::get('/transaksi-admins', [transaksiController::class, 'transaksi']);
    Route::get('/penjualan-admins', [transaksiController::class, 'penjualan']);
    //Pengguna
    //admin
    Route::resource('admin-admins', AdminAdminController::class);
    //user
    Route::resource('user-admins', UserAdminController::class);
    //staff
    Route::resource('staff-admins', StaffController::class);
    //akun
    Route::resource('profil-admins', ProfilController::class);
});





//Jamu
// Route::get('/jamu-admins', [JamuController::class, 'index'])->name('jamu-admins.index');
// Route::get('/jamu-admins/create', [JamuController::class, 'tambah'])->name('jamu-admins.create');
// Route::post('/jamu-admins', [JamuController::class, 'kirim'])->name('jamu-admins.store');
// Route::get('/jamu-admins/{id}', [JamuController::class, 'tampil'])->name('jamu-admins.show');
// Route::get('/jamu-admins/{id}/edit', [JamuController::class, 'ubah'])->name('jamu-admins.edit');
// Route::patch('/jamu-admins/{id}', [JamuController::class, 'tampil'])->name('jamu-admins.show');
// Route::delete('/jamu-admins/{id}/hapus', [JamuController::class, 'hapus'])->name('jamu-admins.destroy');








/*
|--------------------------------------------------------------------------
| Staff
|--------------------------------------------------------------------------
*/






