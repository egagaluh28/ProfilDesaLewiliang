<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function beranda()
    {
        return view('users.components.profil_desa.index');
    }

    public function tentangKami()
    {
        return view('users.components.profil_desa.tentang-kami');
    }

    public function visiMisi()
    {
        return view('users.components.profil_desa.visi-misi');
    }

    public function sejarahDesa()
    {
        return view('users.components.profil_desa.sejarah-desa');
    }

    public function geografisDesa()
    {
        return view('users.components.profil_desa.geografis-desa');
    }

    public function demografiDesa()
    {
        return view('users.components.profil_desa.demografi-desa');
    }

    public function strukturOrganisasi()
    {
        return view('users.components.pemerintah.struktur-organisasi');
    }

    public function perangkatDesa()
    {
        return view('users.components.pemerintah.perangkat-desa');
    }

    public function lembagaDesa()
    {
        return view('users.components.pemerintah.lembaga-desa');
    }

    public function layanan()
    {
        return view('users.components.layanan.layanan');
    }

    public function berita()
    {
        return view('users.components.informasi.berita');
    }

    public function pengumuman()
    {
        return view('users.components.informasi.pengumuman');
    }

    public function agendaKegiatan()
    {
        return view('users.components.informasi.agenda-kegiatan');
    }

    public function galeri()
    {
        return view('users.components.informasi.galeri');
    }

    public function download()
    {
        return view('users.components.informasi.download');
    }

    public function apbdDesa()
    {
        return view('users.components.informasi.apbd-desa');
    }
    public function potensiDesa()
    {
        return view('users.components.potensi_desa.potensi-desa');
    }

    public function produkHukum()
    {
        return view('users.components.produk_hukum.produk-hukum');
    }
}