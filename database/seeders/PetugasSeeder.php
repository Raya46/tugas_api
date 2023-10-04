<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::create([
            'nama_petugas' => 'petugas 1',
            'jabatan_petugas' => 'staff',
            'no_telp_petugas' => '0857621',
            'alamat_petugas' => 'jakarta jalan icikiwir'
        ]);
        Petugas::create([
            'nama_petugas' => 'petugas 2',
            'jabatan_petugas' => 'manager',
            'no_telp_petugas' => '08579012',
            'alamat_petugas' => 'cikunir jalan raflesia'
        ]);
        Petugas::create([
            'nama_petugas' => 'petugas 3',
            'jabatan_petugas' => 'karyawan',
            'no_telp_petugas' => '085762123',
            'alamat_petugas' => 'jalan breyy'
        ]);
    }
}
