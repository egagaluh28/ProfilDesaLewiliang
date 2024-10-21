<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdukHukum; // Pastikan model ProdukHukum diimpor

class ProdukHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan model ProdukHukum untuk membuat data
        ProdukHukum::create([
            'judul' => 'Peraturan Desa No. 1 Tahun 2023',
            'deskripsi' => 'Regulasi mengenai pengelolaan sumber daya alam dan lingkungan hidup.',
        ]);

        ProdukHukum::create([
            'judul' => 'Peraturan Desa No. 2 Tahun 2023',
            'deskripsi' => 'Regulasi mengenai pengelolaan sumber daya alam dan lingkungan hidup.',
        ]);

        ProdukHukum::create([
            'judul' => 'Peraturan Desa No. 3 Tahun 2023',
            'deskripsi' => 'Regulasi mengenai pengelolaan sumber daya alam dan lingkungan hidup.',
        ]);

        ProdukHukum::create([
            'judul' => 'Peraturan Desa No. 4 Tahun 2023',
            'deskripsi' => 'Regulasi mengenai pengelolaan sumber daya alam dan lingkungan hidup.',
        ]);
    }
}
