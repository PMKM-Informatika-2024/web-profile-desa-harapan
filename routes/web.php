<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfildesaController;
use App\Http\Controllers\PerangkatdesaController;
use App\Http\Controllers\LembagadesaController;
use App\Http\Controllers\LayananpublikController;
use App\Http\Controllers\LayananadministrasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KelolakegiatanController;
use App\Http\Controllers\KelolakontakController;
use App\Models\Perangkatdesa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/beranda');
});
Route::get('/profile-desa', function () {
    return view('user/profile-desa');
});
Route::get('/perangkat-desa', function () {
    $perangkatdesas = Perangkatdesa::all();
    return view('user/perangkat-desa', compact('perangkatdesas'));
});
Route::get('/daftar-kegiatan', function () {
    return view('user/kegiatan');
});
Route::get('/daftar-kontak', function () {
    return view('user/kontak');
});
Route::get('/layanan-administrasi', function () {
    return view('user/layanan-administrasi');
});
Route::get('/layanan-publik', function () {
    return view('user/layanan-publik');
});
Route::get('/fasilitas-pendidikan', function () {
    return view('user/fasilitas-pendidikan');
});
Route::get('/lembaga-desa', function () {
    return view('user/lembaga-desa');
});
Route::get('/pemerintahan-desa', function () {
    return view('user/pemerintahan-desa');
});
Route::get('/daftar-pengumuman', function () {
    return view('user/pengumuman');
});
Route::get('/struktur-pemerintahan', function () {
    return view('user/struktur-pemerintahan');
});
Route::get('/adminlogin', [LoginController::class, 'index'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/admin', function(){
    return view('admin/admin-dashboard');
})->middleware('auth');
Route::resource('/profildesa', ProfildesaController::class)->middleware('auth');
Route::resource('/perangkatdesa', PerangkatdesaController::class)->middleware('auth');
Route::resource('/lembagadesa', LembagadesaController::class)->middleware('auth');
Route::resource('/layananpublik', LayananpublikController::class)->middleware('auth');
Route::resource('/layananadministrasi', LayananadministrasiController::class)->middleware('auth');
Route::resource('/pengumuman', PengumumanController::class)->middleware('auth');
Route::resource('/kegiatan', KelolakegiatanController::class)->middleware('auth');
Route::resource('/kontak', KelolakontakController::class)->middleware('auth');