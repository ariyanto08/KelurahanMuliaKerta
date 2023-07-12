<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\KelolaData\AnggotaController;
use App\Http\Controllers\Sirkulasi\KematianController;
use App\Http\Controllers\KelolaData\KeluargaController;
use App\Http\Controllers\KelolaData\PendudukController;
use App\Http\Controllers\Sirkulasi\KelahiranController;
use App\Http\Controllers\User\KelolaDatauser\AnggotaUserController;
use App\Http\Controllers\User\Sirkulasiuser\KematianUserController;
use App\Http\Controllers\User\KelolaDatauser\KeluargaUserController;
use App\Http\Controllers\User\KelolaDatauser\PendudukUserController;
use App\Http\Controllers\User\Sirkulasiuser\KelahiranUserController;

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

Route::get('login', [AuthController::class, 'showLoginform'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//
Route::get('/', [FrontController::class, 'home']);
Route::get('visi', [FrontController::class, 'visi']);
Route::get('struktur', [FrontController::class, 'struktur']);
Route::get('kontak', [FrontController::class, 'kontak']);

Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('dashboard', [HomeController::class, 'index']);

    Route::get('mati', [HomeController::class, 'indexmati']);
    Route::get('miskin', [HomeController::class, 'indexmiskin']);
    Route::get('lahir', [HomeController::class, 'indexlahir']);
    Route::get('su-mati', [HomeController::class, 'cetakmati']);
    Route::get('su-miskin', [HomeController::class, 'cetakmiskin']);
    Route::get('su-lahir', [HomeController::class, 'cetaklahir']);
    Route::resource('kelahiran', KelahiranController::class);
    // Route::resource('kematian', MeninggalController::class);
    Route::get('kematian', [KematianController::class, 'index']);
    Route::get('kematian/create', [KematianController::class, 'create']);
    Route::post('kematian', [KematianController::class, 'store']);
    Route::get('kematian/{kematian}/edit', [KematianController::class, 'edit']);
    Route::put('kematian/{kematian}', [KematianController::class, 'update']);
    Route::delete('kematian/{kematian}', [KematianController::class, 'destroy']);

    Route::resource('penduduk', PendudukController::class);
    // Route::resource('keluarga', KeluargaController::class);
    Route::get('keluarga', [KeluargaController::class, 'index']);
    Route::get('keluarga/create', [KeluargaController::class, 'create']);
    Route::post('keluarga', [KeluargaController::class, 'store']);
    Route::get('keluarga/{keluarga}/edit', [KeluargaController::class, 'edit']);
    Route::put('keluarga/{keluarga}', [KeluargaController::class, 'update']);
    Route::delete('keluarga/{keluarga}', [KeluargaController::class, 'destroy']);


    Route::get('anggota/{keluarga}', [AnggotaController::class, 'index']);
    Route::post('anggota/store', [AnggotaController::class, 'store']);
    Route::get('anggota/{anggota}/edit', [AnggotaController::class, 'edit']);
    Route::put('anggota/{keluarga}', [AnggotaController::class, 'update']);
    Route::delete('anggota/{anggota}', [AnggotaController::class, 'destroy']);

    //

    Route::get('user', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{user}/edit', [UserController::class, 'edit']);
    Route::put('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);

    Route::get('admin', [AdminController::class, 'index']);
    Route::get('admin/create', [AdminController::class, 'create']);
    Route::post('admin', [AdminController::class, 'store']);
    Route::get('admin/{admin}/edit', [AdminController::class, 'edit']);
    Route::put('admin/{admin}', [AdminController::class, 'update']);
    Route::delete('admin/{admin}', [AdminController::class, 'destroy']);
});
Route::prefix('user')->middleware('auth:user')->group(function () {
    //user
    Route::get('dashboard', [HomeUserController::class, 'index']);
    Route::get('mati', [HomeUserController::class, 'indexmati']);
    Route::get('lahir', [HomeUserController::class, 'indexlahir']);
    Route::get('su-mati', [HomeUserController::class, 'cetakmati']);
    Route::get('su-lahir', [HomeUserController::class, 'cetaklahir']);
    Route::resource('kelahiran', KelahiranUserController::class);
    // Route::resource('kematian', MeninggalController::class);
    Route::get('kematian', [KematianUserController::class, 'index']);
    Route::get('kematian/create', [KematianUserController::class, 'create']);
    Route::post('kematian', [KematianUserController::class, 'store']);
    Route::get('kematian/{kematian}/edit', [KematianController::class, 'edit']);
    Route::put('kematian/{kematian}', [KematianUserController::class, 'update']);
    Route::delete('kematian/{kematian}', [KematianUserController::class, 'destroy']);

    Route::resource('penduduk', PendudukUserController::class);
    // Route::resource('keluarga', KeluargaController::class);
    Route::get('keluarga', [KeluargaUserController::class, 'index']);
    Route::get('keluarga/create', [KeluargaUserController::class, 'create']);
    Route::post('keluarga', [KeluargaUserController::class, 'store']);
    Route::get('keluarga/{keluarga}/edit', [KeluargaUserController::class, 'edit']);
    Route::put('keluarga/{keluarga}', [KeluargaUserController::class, 'update']);
    Route::delete('keluarga/{keluarga}', [KeluargaUserController::class, 'destroy']);


    Route::get('anggota/{keluarga}', [AnggotaUserController::class, 'index']);
    Route::post('anggota/store', [AnggotaUserController::class, 'store']);
    Route::get('anggota/{anggota}/edit', [AnggotaUserController::class, 'edit']);
    Route::put('anggota/{keluarga}', [AnggotaUserController::class, 'update']);
    Route::delete('anggota/{anggota}', [AnggotaUserController::class, 'destroy']);
});




//
