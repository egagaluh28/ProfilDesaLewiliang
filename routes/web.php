<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\Admin\profil\TentangKamiController;
use App\Http\Controllers\Admin\profil\VisiMisiController;
use App\Http\Controllers\Admin\profil\SejarahDesaController;
use App\Http\Controllers\Admin\profil\DemografiDesaController;
use App\Http\Controllers\Admin\PotensiDesa\PotensiDesaController;
use App\Http\Controllers\Admin\ProdukHukum\ProdukHukumController;

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

    Route::prefix('admin')->group(function () {
        Route::get('tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami.index');
        Route::get('tentangkami/create', [TentangKamiController::class, 'create'])->name('tentangkami.create');
        Route::post('tentangkami', [TentangKamiController::class, 'store'])->name('tentangkami.store');
        Route::get('tentangkami/{id}/edit', [TentangKamiController::class, 'edit'])->name('tentangkami.edit');
        Route::put('tentangkami/{id}', [TentangKamiController::class, 'update'])->name('tentangkami.update');
        Route::delete('tentangkami/{id}', [TentangKamiController::class, 'destroy'])->name('tentangkami.destroy');
    });

    Route::prefix('admin')->group(function () {
        Route::get('visi-misi', [VisiMisiController::class, 'index'])->name('dashboard.profil.visimisi.index');
        Route::get('visi-misi/create', [VisiMisiController::class, 'create'])->name('dashboard.profil.visimisi.create');
        Route::post('visi-misi', [VisiMisiController::class, 'store'])->name('dashboard.profil.visimisi.store');
        Route::get('visi-misi/{id}/edit', [VisiMisiController::class, 'edit'])->name('dashboard.profil.visimisi.edit');
        Route::put('visi-misi/{id}', [VisiMisiController::class, 'update'])->name('dashboard.profil.visimisi.update');
        Route::delete('visi-misi/{id}', [VisiMisiController::class, 'destroy'])->name('dashboard.profil.visimisi.destroy');
    });

    // Route untuk admin mengubah Sejarah Desa
    Route::prefix('admin')->group(function () {
        Route::get('sejarah', [SejarahDesaController::class, 'index'])->name('admin.dashboard.profil.sejarahdesa');
        Route::get('sejarah/create', [SejarahDesaController::class, 'create'])->name('admin.dashboard.profil.create-sejarah');
        Route::post('sejarah/store', [SejarahDesaController::class, 'store'])->name('admin.dashboard.profil.store-sejarah');
        Route::get('sejarah/edit/{id}', [SejarahDesaController::class, 'edit'])->name('admin.dashboard.profil.edit-sejarah');
        Route::post('sejarah/update/{id}', [SejarahDesaController::class, 'update'])->name('admin.dashboard.profil.update-sejarah');
        Route::delete('sejarah/destroy/{id}', [SejarahDesaController::class, 'destroy'])->name('admin.dashboard.profil.destroy-sejarah');
    });

    // Route untuk admin mengubah demografi Desa
    Route::prefix('admin')->group(function () {
        Route::get('demografi', [DemografiDesaController::class, 'index'])->name('admin.dashboard.profil.demografidesa');
        Route::get('demografi/create', [DemografiDesaController::class, 'create'])->name('admin.dashboard.profil.create-demografi');
        Route::post('demografi/store', [DemografiDesaController::class, 'store'])->name('admin.dashboard.profil.store-demografi');
        Route::get('demografi/edit/{id}', [DemografiDesaController::class, 'edit'])->name('admin.dashboard.profil.edit-demografi');
        Route::post('demografi/update/{id}', [DemografiDesaController::class, 'update'])->name('admin.dashboard.profil.update-demografi');
        Route::delete('demografi/destroy/{id}', [DemografiDesaController::class, 'destroy'])->name('admin.dashboard.profil.destroy-demografi');
    });


    // route untuk admin mengubah potensi desa
    Route::prefix('admin')->group(function () {
        Route::get('potensiDesa', [PotensiDesaController::class, 'index'])->name('admin.dashboard.potensi.potensiDesa');
        Route::get('potensiDesa/create', [PotensiDesaController::class, 'create'])->name('admin.dashboard.potensi.create_potensiDesa');
        Route::post('potensiDesa/store', [PotensiDesaController::class, 'store'])->name('admin.dashboard.potensi.store_potensiDesa');
        Route::get('potensiDesa/edit{id}', [PotensiDesaController::class, 'edit'])->name('admin.dashboard.potensi.edit_potensiDesa');
        Route::put('potensiDesa/update/{id}', [PotensiDesaController::class, 'update'])->name('admin.dashboard.potensi.update_potensiDesa');
        Route::delete('potensiDesa/destroy/{id}', [PotensiDesaController::class, 'destroy'])->name('admin.dashboard.potensi.destroy_potensiDesa');
    });

    // route untuk admin mengubah produk hukum
    Route::prefix('admin')->group(function () {
        Route::get('produkHukum', [ProdukHukumController::class, 'index'])->name('admin.dashboard.produkHukum.produkHukum');
        Route::get('produkHukum/create', [ProdukHukumController::class, 'create'])->name('admin.dashboard.produkHukum.create_produkHukum');
        Route::post('produkHukum/store', [ProdukHukumController::class, 'store'])->name('admin.dashboard.produkHukum.store_produkHukum');
        Route::get('produkHukum/edit{id}', [ProdukHukumController::class, 'edit'])->name('admin.dashboard.produkHukum.edit_produkHukum');
        Route::put('produkHukum/update/{id}', [ProdukHukumController::class, 'update'])->name('admin.dashboard.produkHukum.update_produkHukum');
        Route::delete('produkHukum/destroy/{id}', [ProdukHukumController::class, 'destroy'])->name('admin.dashboard.produkHukum.destroy_produkHukum');
    });


});


require __DIR__.'/auth.php';

Route::get('/beranda', [ProfilDesaController::class, 'beranda'])->name('ini');

// Profil Desa
// Routes untuk Profil Desa
Route::get('/beranda', [ProfilDesaController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [App\Http\Controllers\ProfilDesaController::class, 'tentangKami'])->name('tentang.kami');
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
