<?php

namespace App\Http\Controllers\Admin\profil;

use App\Http\Controllers\Controller;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index() {
        $visiMisi = VisiMisi::all();
        return view('admin.dashboard.profil.visimisi', compact('visiMisi'));
    }

    public function create() {
        return view('admin.dashboard.profil.create_visimisi');
    }

    public function store(Request $request) {
        // Validasi dan simpan data
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar_visi' => 'image|nullable',
            'gambar_misi' => 'image|nullable',
        ]);

        $visiMisi = new VisiMisi();
        $visiMisi->visi = $request->visi;
        $visiMisi->misi = $request->misi;

        // Upload gambar jika ada
        if ($request->hasFile('gambar_visi')) {
            $visiMisi->gambar_visi = $request->file('gambar_visi')->store('images/sejarahdesa', 'public');
        }

        if ($request->hasFile('gambar_misi')) {
            $visiMisi->gambar_misi = $request->file('gambar_misi')->store('images/sejarahdesa', 'public');
        }

        // if ($request->hasFile('gambar')) {
        //     $imagePath = $request->file('gambar')->store('images/sejarahdesa', 'public');
        //     $sejarahDesa->gambar = $imagePath;
        // }

        $visiMisi->save();

        return redirect()->route('dashboard.profil.visimisi.index')->with('success', 'Visi dan Misi berhasil ditambahkan');
    }

    public function edit($id) {
        $visiMisi = VisiMisi::findOrFail($id);
        return view('admin.dashboard.profil.edit_visimisi', compact('visiMisi'));
    }

    public function update(Request $request, $id) {
        // Validasi dan update data
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar_visi' => 'image|nullable',
            'gambar_misi' => 'image|nullable',
        ]);

        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->visi = $request->visi;
        $visiMisi->misi = $request->misi;

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar_visi')) {
            $visiMisi->gambar_visi = $request->file('gambar_visi')->store('images/sejarahdesa', 'public');
        }

        if ($request->hasFile('gambar_misi')) {
            $visiMisi->gambar_misi = $request->file('gambar_misi')->store('images/sejarahdesa', 'public');
        }

        $visiMisi->save();

        return redirect()->route('dashboard.profil.visimisi.index')->with('success', 'Visi dan Misi berhasil diperbarui');
    }

    public function destroy($id) {
        $visiMisi = VisiMisi::findOrFail($id);
        $visiMisi->delete();

        return redirect()->route('dashboard.profil.visimisi.index')->with('success', 'Visi dan Misi berhasil dihapus');
    }
}
