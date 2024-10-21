<?php

namespace App\Http\Controllers\Admin\PotensiDesa;

use App\Http\Controllers\Controller;
use App\Models\PotensiDesa;
use Illuminate\Http\Request;
class PotensiDesaController extends Controller
{
    // Menampilkan daftar Potensi Desa
    public function index()
    {
        $potensiDesa = PotensiDesa::all();
        return view('admin.dashboard.potensiDesa.potensiDesa', compact('potensiDesa'));
    }

    // Menampilkan form untuk menambah Potensi Desa
    public function create()
    {
        return view('admin.dashboard.potensiDesa.create_potensiDesa');
    }

    // Menyimpan Potensi Desa baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan data Potensi Desa baru
        $potensiDesa = new PotensiDesa();
        $potensiDesa->judul = $request->judul;
        $potensiDesa->deskripsi = $request->deskripsi;

        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images/potensi', 'public');
            $potensiDesa->gambar = $gambarPath; // Simpan path gambar
        }

        $potensiDesa->save();

        return redirect()->route('admin.dashboard.potensi.potensiDesa')->with('success', 'Potensi Desa berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit Potensi Desa
    public function edit($id)
    {
        $potensiDesa = PotensiDesa::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID
        return view('admin.dashboard.potensiDesa.edit_potensiDesa', compact('potensiDesa'));
    }

    // Memperbarui Potensi Desa yang ada di dalam database
    public function update(Request $request, $id)
    {
        $potensiDesa = PotensiDesa::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($potensiDesa->gambar) {
                \Storage::disk('public')->delete($potensiDesa->gambar);
            }

            $gambarPath = $request->file('gambar')->store('images/potensi', 'public');
            $potensiDesa->gambar = $gambarPath;
        }

        $potensiDesa->judul = $request->judul;
        $potensiDesa->deskripsi = $request->deskripsi;
        $potensiDesa->save();

        return redirect()->route('admin.dashboard.potensi.potensiDesa')->with('success', 'Potensi Desa berhasil diperbarui!');
    }

    // Menghapus Potensi Desa dari database
    public function destroy($id)
    {
        $potensiDesa = PotensiDesa::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID

        // Menghapus gambar jika ada
        if ($potensiDesa->gambar) {
            \Storage::disk('public')->delete($potensiDesa->gambar);
        }

        $potensiDesa->delete();

        return redirect()->route('admin.dashboard.potensi.potensiDesa')->with('success', 'Potensi Desa berhasil dihapus!');
    }
}

