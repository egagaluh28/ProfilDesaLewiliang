<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PotensiDesa;

class PotensiDesaSeeder extends Seeder
{
    public function run()
    {
        PotensiDesa::create([
            'judul' => 'Pertanian',
            'deskripsi' => 'Tanah subur ideal untuk tanaman padi, sayuran, dan buah-buahan.',
            'gambar' => 'users/images/home/17.jpg',
        ]);

        PotensiDesa::create([
            'judul' => 'Kerajinan Tangan',
            'deskripsi' => 'Pengrajin terampil menghasilkan produk berkualitas tinggi.',
            'gambar' => 'users/images/home/17.jpg',
        ]);

        PotensiDesa::create([
            'judul' => 'Wisata Alam',
            'deskripsi' => 'Pemandangan indah menjadikan desa kami destinasi wisata menarik.',
            'gambar' => 'users/images/home/17.jpg',
        ]);
    }
}
