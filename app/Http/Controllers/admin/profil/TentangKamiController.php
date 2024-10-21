<?php

namespace App\Http\Controllers\Admin\profil;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function index()
    {
        // Fetch all data from TentangKami model
        $tentangKami = TentangKami::all();
        return view('admin.dashboard.profil.tentangkami', compact('tentangKami'));
    }

    public function create()
    {
        // Load create form
        return view('admin.dashboard.profil.create_tentangkami');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tentangKami = new TentangKami();
        $tentangKami->judul = $request->judul;
        $tentangKami->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('tentang_kami', 'public');
            $tentangKami->gambar = $path;
        }
        

        $tentangKami->save();

        return redirect()->route('tentangkami.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data berdasarkan ID
        $tentangKami = TentangKami::find($id);

        // Cek apakah data ditemukan
        if (!$tentangKami) {
            return redirect()->route('tentangkami.index')->with('error', 'Data tidak ditemukan');
        }

        return view('admin.dashboard.profil.edit_tentangkami', compact('tentangKami'));
    }



    public function update(Request $request, $id)
    {
        // Ambil data berdasarkan ID
        $tentangKami = TentangKami::findOrFail($id);

        // Validasi data inputan
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Cek jika ada gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Jika ada gambar lama, hapus dari storage
            if ($tentangKami->gambar) {
                Storage::delete('public/' . $tentangKami->gambar);
            }

            // Simpan gambar baru ke storage
            $data['gambar'] = $request->file('gambar')->store('tentang-kami', 'public');
        }

        // Update data Tentang Kami
        $tentangKami->update($data);

        return redirect()->route('tentangkami.index')->with('success', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $tentangKami = TentangKami::findOrFail($id);

        // Cek dan hapus gambar dari storage jika ada
        if ($tentangKami->gambar) {
            Storage::delete('public/' . $tentangKami->gambar);
        }

        // Hapus data Tentang Kami
        $tentangKami->delete();

        return redirect()->route('tentangkami.index')->with('success', 'Data berhasil dihapus');
    }

}
