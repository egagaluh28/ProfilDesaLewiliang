<?php

namespace App\Http\Controllers\Admin\profil;

use App\Http\Controllers\Controller;
use App\Models\SejarahDesa;
use Illuminate\Http\Request;

class SejarahDesaController extends Controller
{
    // Menampilkan daftar sejarah desa
    public function index()
    {
        // Ambil semua data sejarah desa
        $sejarahDesa = SejarahDesa::all();
        return view('admin.dashboard.profil.sejarahdesa', compact('sejarahDesa'));
    }

    // Menampilkan form untuk membuat sejarah desa baru
    public function create()
    {
        return view('admin.dashboard.profil.create-sejarah');
    }

    // Menyimpan data sejarah desa baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan data sejarah desa baru
        $sejarahDesa = new SejarahDesa();
        $sejarahDesa->judul = $request->judul;
        $sejarahDesa->konten = $request->konten;

        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images/sejarahdesa', 'public');
            $sejarahDesa->gambar = $imagePath;
        }

        $sejarahDesa->save();

        return redirect()->route('admin.dashboard.profil.sejarahdesa')->with('success', 'Sejarah Desa berhasil dibuat.');
    }

    // Menampilkan form untuk mengedit sejarah desa
    public function edit($id)
    {
        $sejarahDesa = SejarahDesa::findOrFail($id);
        return view('admin.dashboard.profil.edit-sejarah', compact('sejarahDesa'));
    }

    // Update data sejarah desa
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $sejarahDesa = SejarahDesa::findOrFail($id);
        $sejarahDesa->judul = $request->judul;
        $sejarahDesa->konten = $request->konten;

        // Cek apakah ada gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images/sejarahdesa', 'public');
            $sejarahDesa->gambar = $imagePath;
        }

        $sejarahDesa->save();

        return redirect()->route('admin.dashboard.profil.sejarahdesa')->with('success', 'Sejarah Desa berhasil diperbarui.');
    }

    // Menghapus data sejarah desa
    public function destroy($id)
    {
        $sejarahDesa = SejarahDesa::findOrFail($id);
        $sejarahDesa->delete();

        return redirect()->route('admin.dashboard.profil.sejarahdesa')->with('success', 'Sejarah Desa berhasil dihapus.');
    }
}
