<?php

namespace App\Http\Controllers;
use App\Models\TentangKami;
use App\Models\VisiMisi;
use App\Models\SejarahDesa;
use App\Models\GeografisDesa;
use App\Models\PotensiDesa;
use App\Models\Demografi;
use App\Models\produkHukum;

use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function beranda()
    {
        return view('users.components.profil_desa.index');
    }

    public function tentangKami()
    {
        $tentangKami = TentangKami::first(); // Ambil data pertama dari tabel

        if (!$tentangKami) {
            // Jika tidak ada data, arahkan ke halaman lain atau tampilkan pesan error
            return view('users.components.profil_desa.tentang-kami', ['tentangKami' => null]);
        }

        return view('users.components.profil_desa.tentang-kami', compact('tentangKami'));
    }

    public function visiMisi()
    {
        $visiMisi = VisiMisi::first(); // Mengambil data pertama dari tabel

        if (!$visiMisi) {
            return view('users.components.profil_desa.visi-misi', ['visiMisi' => null]);
        }

        return view('users.components.profil_desa.visi-misi', compact('visiMisi'));
    }


    public function sejarahDesa()
    {
        // Ambil data pertama dari tabel sejarah_desas
        $sejarahDesa = SejarahDesa::first();

        // Jika tidak ada data, kembalikan view dengan variabel sejarahDesa bernilai null
        if (!$sejarahDesa) {
            return view('users.components.profil_desa.sejarah-desa', ['sejarahDesa' => null]);
        }

        // Jika ada data, kembalikan view dengan data sejarahDesa
        return view('users.components.profil_desa.sejarah-desa', compact('sejarahDesa'));
    }

    public function geografisDesa()
    {
        // Ambil semua data geografis desa
        $geografisDesa = GeografisDesa::all();

        // Cek jika tidak ada data geografis desa
        if ($geografisDesa->isEmpty()) {
            return view('users.components.profil_desa.geografis-desa', ['geografisDesa' => null]);
        }

        return view('users.components.profil_desa.geografis-desa', compact('geografisDesa'));
    }



    public function demografiDesa()
    {
        $demografi = Demografi::all();

        if ($demografi->isEmpty()){
            return view('users.components.profil_desa.demografi-desa', ['demografi' => null]);
        }

        return view('users.components.profil_desa.demografi-desa', compact('demografi'));
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
        $potensiDesa = PotensiDesa::all();
        return view('users.components.potensi_desa.potensi-desa', compact('potensiDesa'));
    }

    public function produkHukum()
    {
        $produkHukum = ProdukHukum::all();
        return view('users.components.produk_hukum.produk-hukum', compact('produkHukum'));
    }
}
