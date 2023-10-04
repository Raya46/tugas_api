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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id('id_pengembalian');
            $table->date('tanggal_pengembalian');
            $table->integer('denda');
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
        Schema::dropIfExists('pengembalians');
    }
};
