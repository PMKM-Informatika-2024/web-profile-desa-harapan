<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfildesaController;
use App\Http\Controllers\PerangkatdesaController;
use App\Http\Controllers\LembagadesaController;
use App\Http\Controllers\LayananpublikController;
use App\Http\Controllers\LayananadministrasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KelolakegiatanController;
use App\Http\Controllers\KelolakontakController;
use App\Models\Kelolakegiatan;
use App\Models\Kelolakontak;
use App\Models\Layananadministrasi;
use App\Models\Layananpublik;
use App\Models\Lembagadesa;
use App\Models\Pengumuman;
use App\Models\Perangkatdesa;
use App\Models\Profildesa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('user/beranda',[
    'profildesa' => Profildesa::first(),
    'perangkat_desas'=>Perangkatdesa::orderBy('created_at','asc')->limit(6)->get(),
    'pengumuman'=>Pengumuman::orderBy('created_at','asc')->limit(4)->get(),
]);     
});
Route::get('/profile-desa', function () {
return view('user/profile-desa',[
    'profildesa' => Profildesa::first(),
    
]);
});
Route::get('/perangkat-desa', function () {
return view('user/perangkat-desa', [
    'perangkatdesa' => Perangkatdesa::all()
]);
});

Route::get('/daftar-kegiatan', function () {
return view('user/kegiatan',[
    'kegiatan' => Kelolakegiatan::orderBy('created_at','desc')->limit(6)->get(),
]);
});
Route::get('/daftar-kontak', function () {
return view('user/kontak',[
    'kontak' => Kelolakontak::first(),
]);
});
Route::get('/layanan-administrasi', function () {
return view('user/layanan-administrasi',[
    'layananadministrasi' => Layananadministrasi::all(),
]);
});
Route::get('/layanan-publik', function () {
$layananpublikpendidikan = Layananpublik::where('kategori_fasilitas', 'pendidikan')->get();
$layananpublikpublik = Layananpublik::where('kategori_fasilitas', 'publik')->get();
return view('user/layanan-publik',[
    'layananpublikpendidikan' => $layananpublikpendidikan,
    'layananpublikpublik' => $layananpublikpublik,
]);
});
Route::get('/fasilitas-pendidikan', function () {
return view('user/fasilitas-pendidikan');
});
Route::get('/lembaga-desa', function () {
return view('user/lembaga-desa',[
    'lembagadesa' => Lembagadesa::all(),
    'perangkatdesa' => Perangkatdesa::whereIn('jabatan',['Kepala Desa','KEPALA DESA', 'kepala desa'])->first(),
]);
});
Route::get('/pemerintahan-desa', function () {
return view('user/pemerintahan-desa');
});
Route::get('/daftar-pengumuman', function () {
return view('user/pengumuman',[
    'pengumuman' => Pengumuman::orderBy('created_at','desc')->get(),
]);
});
Route::get('/detailpengumuman/{id}', function($id){
$pengumuman = pengumuman::find($id);
return view('user/detailpengumuman',[
    'detailpengumuman' => $pengumuman,
]);
});

Route::get('/struktur-pemerintahan', function () {
return view('user/struktur-pemerintahan');
});
Route::get('/adminlogin', [LoginController::class, 'index'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/admin', function(){
//     return view('admin/admin-dashboard');
// })->middleware('auth');
Route::resource('/admin', DashboardController::class)->middleware('auth');
Route::resource('/profildesa', ProfildesaController::class)->middleware('auth');
Route::resource('/perangkatdesa', PerangkatdesaController::class)->middleware('auth');
Route::resource('/lembagadesa', LembagadesaController::class)->middleware('auth');
Route::resource('/layananpublik', LayananpublikController::class)->middleware('auth');
Route::resource('/layananadministrasi', LayananadministrasiController::class)->middleware('auth');
Route::resource('/pengumuman', PengumumanController::class)->middleware('auth');
Route::resource('/kegiatan', KelolakegiatanController::class)->middleware('auth');
Route::resource('/kontak', KelolakontakController::class)->middleware('auth');