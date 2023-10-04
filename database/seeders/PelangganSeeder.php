<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'kode_pelanggan' => '121212',
            'nama_pelanggan' => 'raya',
            'jk_pelanggan' => 'L',
            'jurusan_pelanggan' => 'RPL',
            'no_telp_pelanggan' => '0857123123',
            'alamat_pelanggan' => 'JALAN JALAN YUK'
        ]);
        Pelanggan::create([
            'kode_pelanggan' => '343434',
            'nama_pelanggan' => 'FERDI',
            'jk_pelanggan' => 'L',
            'jurusan_pelanggan' => 'BDP',
            'no_telp_pelanggan' => '08679111',
            'alamat_pelanggan' => 'JALAN CONDET'
        ]);
        Pelanggan::create([
            'kode_pelanggan' => '696969',
            'nama_pelanggan' => 'IKSAN',
            'jk_pelanggan' => 'P',
            'jurusan_pelanggan' => 'AKL',
            'no_telp_pelanggan' => '085709111',
            'alamat_pelanggan' => 'JALAN AL HAWI'
        ]);
    }
}
