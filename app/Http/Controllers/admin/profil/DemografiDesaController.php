<?php

namespace App\Http\Controllers\Admin\profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demografi; // Ensure the model name is correct with the correct casing.

class DemografiDesaController extends Controller
{
    public function index()
    {
        // Fetch all demographic records
        $demografi = Demografi::all(); // Ensure the model name is capitalized
        return view('admin.dashboard.profil.demografidesa', compact('demografi'));
    }

    public function create()
    {
        return view('admin.dashboard.profil.create_demografidesa');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
        ]);

        // Save new demographic data
        $demografi = new Demografi(); // Correct the model case
        $demografi->judul = $request->judul;
        $demografi->konten = $request->konten;

        $demografi->save();

        return redirect()->route('admin.dashboard.profil.demografidesa')
                         ->with('success', 'Demografi desa berhasil dibuat.');
    }

    public function edit($id)
    {
        // Find the demographic data by ID
        $demografi = Demografi::findOrFail($id); // Correct the model case
        return view('admin.dashboard.profil.edit_demografidesa', compact('demografi'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'judul' => 'required|string',
            'konten' => 'required|string',
        ]);

        // Update the demographic data
        $demografi = Demografi::findOrFail($id); // Correct the model case
        $demografi->judul = $request->judul;
        $demografi->konten = $request->konten;

        $demografi->save();

        return redirect()->route('admin.dashboard.profil.demografidesa')
                         ->with('success', 'Demografi desa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Delete the demographic record
        $demografi = Demografi::findOrFail($id); // Correct the model case
        $demografi->delete();

        return redirect()->route('admin.dashboard.profil.demografidesa')
                         ->with('success', 'Demografi desa berhasil dihapus.');
    }
}
