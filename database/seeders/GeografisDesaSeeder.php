<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeografisDesa;

class GeografisDesaSeeder extends Seeder
{
    public function run()
    {
        GeografisDesa::create([
            'judul' => 'Letak dan Kondisi Geografis',
            'konten' => 'Desa Leuwiliang terletak di Kecamatan Leuwiliang, Kabupaten Bogor, Provinsi Jawa Barat. Desa ini berada di ketinggian sekitar 250-400 mdpl dan memiliki luas wilayah sekitar 15,5 km². Dikelilingi oleh pegunungan dan lahan pertanian yang subur, menjadikannya tempat yang ideal untuk pertanian dan perkebunan.',
            'peta_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1853320055035!2d106.6352927153359!3d-6.596138695391126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f96c6a1ab4bb%3A0x232c848504c3eaf3!2sDesa%20Leuwiliang!5e0!3m2!1sid!2sid!4v1697039160441!5m2!1sid!2sid'
        ]);
    }
}
