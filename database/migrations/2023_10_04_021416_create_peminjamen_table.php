<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id('id_peminjamen');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->foreignId('id_buku')->constrained('bukus', 'id_buku')->onDelete('CASCADE');
            $table->foreignId('id_pelanggan')->constrained('pelanggans', 'id_pelanggan')->onDelete('CASCADE');
            $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
