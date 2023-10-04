<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pelanggan',
        'nama_pelanggan',
        'jk_pelanggan',
        'jurusan_pelanggan',
        'no_telp_pelanggan',
        'alamat_pelanggan',
    ];
}
