<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TentangKami;

class TentangKamiSeeder extends Seeder
{
    public function run()
    {
        TentangKami::create([
            'judul' => 'Selamat Datang di Profil Desa Lewiliang',
            'deskripsi' => 'Desa Lewiliang merupakan desa yang kaya akan potensi alam dan budaya. Terletak di wilayah yang strategis, desa ini terus berkembang dalam sektor pertanian, peternakan, dan ekonomi kreatif. Melalui berbagai program pembangunan, Desa Lewiliang berkomitmen untuk meningkatkan kesejahteraan masyarakatnya dengan memanfaatkan sumber daya alam yang ada.',
            'gambar' => 'path/to/default-image.jpg', // Atau tambahkan path gambar default
        ]);

    }
}

