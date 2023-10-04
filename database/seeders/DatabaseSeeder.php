<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PelangganSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(RakSeeder::class);
        $this->call(PengembalianSeeder::class);
        $this->call(PeminjamanSeeder::class);
    }
}
