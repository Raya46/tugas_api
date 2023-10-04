<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_buku',
        'nama_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_terbit_buku',
    ];
}
