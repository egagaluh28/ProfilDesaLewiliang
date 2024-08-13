<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/beranda', function () {
    return view('users.components.profil_desa.index');
});
Route::get('/tentang-kami', function () {
    return view('users.components.profil_desa.tentang-kami');
});
Route::get('/visi-misi', function () {
    return view('users.components.profil_desa.visi-misi');
});
Route::get('/sejarah-desa', function () {
    return view('users.components.profil_desa.sejarah-desa');
});
Route::get('/geografis-desa', function () {
    return view('users.components.profil_desa.geografis-desa');
});
Route::get('/demografi-desa', function () {
    return view('users.components.profil_desa.demografi-desa');
});