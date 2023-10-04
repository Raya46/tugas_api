<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengembalian::create([
            'tanggal_pengembalian' => '2022-09-22',
            'denda' => 10000,
            'id_buku' => 1,
            'id_pelanggan' => 1,
            'id_petugas' => 1,
        ]);
        Pengembalian::create([
            'tanggal_pengembalian' => '2022-10-22',
            'denda' => 20000,
            'id_buku' => 2,
            'id_pelanggan' => 2,
            'id_petugas' => 2,
        ]);
        Pengembalian::create([
            'tanggal_pengembalian' => '2023-05-22',
            'denda' => 30000,
            'id_buku' => 3,
            'id_pelanggan' => 3,
            'id_petugas' => 3,
        ]);
    }
}
