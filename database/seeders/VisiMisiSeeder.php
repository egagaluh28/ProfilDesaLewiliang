<?php

// database/seeders/VisiMisiSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VisiMisiSeeder extends Seeder
{
    public function run()
    {
        DB::table('visi_misi')->insert([
            'visi' => 'Menjadikan Desa Leuwiliang sebagai desa yang mandiri, berdaya saing, dan sejahtera dengan pengelolaan sumber daya lokal dan kesejahteraan masyarakat yang berkelanjutan.',
            'misi' => '1. Meningkatkan partisipasi masyarakat dalam pembangunan desa.
                       2. Mendorong inovasi dan kreativitas melalui pengembangan UMKM.
                       3. Mengelola sumber daya alam secara berkelanjutan.
                       4. Meningkatkan kualitas pendidikan, kesehatan, dan kesejahteraan sosial.',
            'gambar_visi' => 'users/images/home/15.jpg',
            'gambar_misi' => 'users/images/home/15.jpg',
        ]);
    }
}
