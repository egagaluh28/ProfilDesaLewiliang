<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SejarahDesa;

class SejarahDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SejarahDesa::create([
            'judul' => 'Sejarah Desa Leuwiliang',
            'konten' => 'Desa Leuwiliang memiliki sejarah yang kaya dan menarik. Didirikan pada tahun 1900, desa
                                    ini awalnya merupakan daerah pertanian yang subur. Masyarakatnya terdiri dari berbagai
                                    suku, dengan mayoritas penduduk berasal dari suku Sunda. Seiring berjalannya waktu, desa
                                    ini mengalami banyak perubahan, baik dari segi sosial, ekonomi, maupun budaya.

                                    Pada masa penjajahan Belanda, desa ini menjadi pusat kegiatan pertanian dan perdagangan.
                                    Setelah kemerdekaan, Desa Leuwiliang bertransformasi menjadi desa mandiri dengan
                                    program-program pemberdayaan masyarakat yang semakin berkembang.

                                    Hingga kini, Desa Leuwiliang dikenal dengan potensi pertaniannya yang melimpah, terutama
                                    dalam bidang padi dan sayuran. Tradisi dan budaya lokal masih terjaga dengan baik,
                                    menjadikan desa ini tempat yang menarik untuk dikunjungi.',
            'gambar' => 'users/images/blog/9.jpg'
        ]);
    }
}
