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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('kode_pelanggan', 9);
            $table->string('nama_pelanggan', 100);
            $table->enum('jk_pelanggan', ['L', 'P']);
            $table->string('jurusan_pelanggan', 3);
            $table->string('no_telp_pelanggan', 13);
            $table->text('alamat_pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
