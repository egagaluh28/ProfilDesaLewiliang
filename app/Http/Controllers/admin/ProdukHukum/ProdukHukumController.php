<?php

namespace App\Http\Controllers\Admin\ProdukHukum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukHukum;


class ProdukHukumController extends Controller
{
    // Menampilkan daftar Potensi Desa
    public function index()
    {
        $produkHukum = ProdukHukum::all();
        return view('admin.dashboard.produkHukum.produkHukum', compact('produkHukum'));
    }

    // Menampilkan form untuk menambah Potensi Desa
    public function create()
    {
        return view('admin.dashboard.produkHukum.create_produkHukum');
    }

    // Menyimpan Potensi Desa baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Simpan data Potensi Desa baru
        $produkHukum = new ProdukHukum();
        $produkHukum->judul = $request->judul;
        $produkHukum->deskripsi = $request->deskripsi;

        $produkHukum->save();

        return redirect()->route('admin.dashboard.produkHukum.produkHukum')->with('success', 'Produk Hukum berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit Potensi Desa
    public function edit($id)
    {
        $produkHukum = ProdukHukum::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID
        return view('admin.dashboard.produkHukum.edit_produkHukum', compact('produkHukum'));
    }

    // Memperbarui Potensi Desa yang ada di dalam database
    public function update(Request $request, $id)
    {
        $produkHukum = ProdukHukum::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $produkHukum->judul = $request->judul;
        $produkHukum->deskripsi = $request->deskripsi;
        $produkHukum->save();

        return redirect()->route('admin.dashboard.produkHukum.produkHukum')->with('success', 'produk hukum berhasil diperbarui!');
    }

    // Menghapus Potensi Desa dari database
    public function destroy($id)
    {
        $produkHukum = ProdukHukum::findOrFail($id); // Mengambil data Potensi Desa berdasarkan ID

        $produkHukum->delete();

        return redirect()->route('admin.dashboard.produkHukum.produkHukum')->with('success', 'produk hukum berhasil dihapus!');
    }
}
