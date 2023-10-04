<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rak::create([
            'nama_rak' => 'rak pojok1',
            'lokasi_rak' => 'pojok kanan perpus',
            'id_buku' => 1
        ]);
        Rak::create([
            'nama_rak' => 'rak pojok2',
            'lokasi_rak' => 'pojok kiri perpus',
            'id_buku' => 2
        ]);
        Rak::create([
            'nama_rak' => 'rak pojok3',
            'lokasi_rak' => 'serong kanan perpus',
            'id_buku' => 3
        ]);
    }
}
