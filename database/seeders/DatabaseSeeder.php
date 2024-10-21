<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 user random
        // User::factory(10)->create();

        // Membuat 1 user spesifik
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),  // Jangan lupa enkripsi password
        ]);

        // Memanggil Seeder untuk
        $this->call(VisiMisiSeeder::class);
        $this->call(TentangKamiSeeder::class);
        $this->call(SejarahDesaSeeder::class);
        $this->call(GeografisDesaSeeder::class);
        $this->call(DemografiSeeder::class);
        $this->call(PotensiDesaSeeder::class);
        $this->call(ProdukHukumSeeder::class);
    }
}
