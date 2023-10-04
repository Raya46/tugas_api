<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'kode_buku' => '909011',
            'judul_buku' => 'buku sapardi',
            'penulis_buku' => 'sapardi djoko',
            'penerbit_buku' => 'mnctv',
            'tahun_terbit_buku' => '2014',
            'stok' => 12
        ]);
        Buku::create([
            'kode_buku' => '109210',
            'judul_buku' => 'tenggelamnya kapal van der wijck',
            'penulis_buku' => 'reza rahardian',
            'penerbit_buku' => 'erlangga',
            'tahun_terbit_buku' => '2022',
            'stok' => 9
        ]);
        Buku::create([
            'kode_buku' => '789123',
            'judul_buku' => 'cuy universe',
            'penulis_buku' => 'dea afrizal',
            'penerbit_buku' => 'cn media',
            'tahun_terbit_buku' => '2023',
            'stok' => 1
        ]);
    }
}
