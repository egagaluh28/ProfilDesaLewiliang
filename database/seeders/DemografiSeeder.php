<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Demografi; // Pastikan Anda menggunakan model yang benar

class DemografiSeeder extends Seeder
{
    public function run()
    {
        // Contoh data demografi
        $demografiData = [
            [
                'judul' => 'Populasi dan Komposisi Penduduk',
                'konten' => 'Desa Leuwiliang memiliki populasi sekitar 5.500 jiwa dengan kepadatan penduduk sekitar 350 jiwa per km². Mayoritas penduduknya adalah suku Sunda, yang memiliki tradisi dan budaya yang kaya. Sebagian besar warga berprofesi sebagai petani, dengan hasil pertanian utama berupa padi, sayuran, dan buah-buahan. Selain itu, terdapat sektor perdagangan kecil yang mendukung perekonomian lokal.'
            ],
            [
                'judul' => 'Pendidikan',
                'konten' => 'Tingkat partisipasi sekolah di desa ini cukup tinggi, dengan banyak anak yang melanjutkan pendidikan hingga jenjang SMP dan SMA. Desa Leuwiliang memiliki beberapa lembaga pendidikan formal dan non-formal yang berperan penting dalam pengembangan sumber daya manusia.'
            ],
            [
                'judul' => 'Usia Penduduk',
                'konten' => 'Komposisi usia penduduk didominasi oleh usia produktif, yaitu antara 15 hingga 64 tahun, yang mendukung kegiatan ekonomi dan sosial di desa. Masyarakat Desa Leuwiliang sangat aktif dalam berbagai kegiatan yang mendukung kemajuan daerah.'
            ],
            [
                'judul' => 'Kesimpulan',
                'konten' => 'Secara keseluruhan, demografi Desa Leuwiliang menunjukkan masyarakat yang aktif dan terlibat dalam pembangunan daerah, dengan perhatian yang tinggi terhadap pendidikan dan pertanian sebagai sektor utama ekonomi. Dengan potensi yang ada, desa ini memiliki prospek yang baik untuk masa depan.'
            ]
        ];

        // Menambahkan data ke tabel demografis
        foreach ($demografiData as $data) {
            Demografi::create($data);
        }
    }
}
