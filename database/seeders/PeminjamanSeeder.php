<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::create([
            'tanggal_pinjam' => '2022-06-15',
            'tanggal_kembali' => '2022-07-15',
            'id_buku' => 1,
            'id_pelanggan' => 1,
            'id_petugas' => 1
        ]);
        Peminjaman::create([
            'tanggal_pinjam' => '2022-05-30',
            'tanggal_kembali' => '2022-06-30',
            'id_buku' => 2,
            'id_pelanggan' => 2,
            'id_petugas' => 2
        ]);
        Peminjaman::create([
            'tanggal_pinjam' => '2022-04-22',
            'tanggal_kembali' => '2022-05-22',
            'id_buku' => 3,
            'id_pelanggan' => 3,
            'id_petugas' => 3
        ]);
    }
}
