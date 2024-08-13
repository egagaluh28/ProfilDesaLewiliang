<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilDesaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/tes', [HomeController::class, 'index'])->name('admin.home.index');

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Profil Desa
Route::get('/beranda', [ProfilDesaController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [ProfilDesaController::class, 'tentangKami'])->name('tentang.kami');
Route::get('/visi-misi', [ProfilDesaController::class, 'visiMisi'])->name('visi.misi');
Route::get('/sejarah-desa', [ProfilDesaController::class, 'sejarahDesa'])->name('sejarah.desa');
Route::get('/geografis-desa', [ProfilDesaController::class, 'geografisDesa'])->name('geografis.desa');
Route::get('/demografi-desa', [ProfilDesaController::class, 'demografiDesa'])->name('demografi.desa');

// Pemerintahan
Route::get('/struktur-organisasi', [ProfilDesaController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
Route::get('/perangkat-desa', [ProfilDesaController::class, 'perangkatDesa'])->name('perangkat.desa');
Route::get('/lembaga-desa', [ProfilDesaController::class, 'lembagaDesa'])->name('lembaga.desa');

//Layanan
Route::get('/layanan', [ProfilDesaController::class, 'layanan'])->name('layanan');

// Informasi
Route::get('/berita', [ProfilDesaController::class, 'berita'])->name('berita');
Route::get('/pengumuman', [ProfilDesaController::class, 'pengumuman'])->name('pengumuman');
Route::get('/agenda-kegiatan', [ProfilDesaController::class, 'agendaKegiatan'])->name('agenda.kegiatan');
Route::get('/galeri', [ProfilDesaController::class, 'galeri'])->name('galeri');
Route::get('/download', [ProfilDesaController::class, 'download'])->name('download');
Route::get('/apbd-desa', [ProfilDesaController::class, 'apbdDesa'])->name('apbd.desa');

// Potensi Desa
Route::get('/potensi-desa', [ProfilDesaController::class, 'potensiDesa'])->name('potensi.desa');

// Produk Hukum
Route::get('/produk-hukum', [ProfilDesaController::class, 'produkHukum'])->name('produk.hukum');