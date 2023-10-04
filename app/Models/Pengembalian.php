<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pengembalian',
        'denda',
        'id_buku',
        'id_pelanggan',
        'id_petugas',
    ];
}
