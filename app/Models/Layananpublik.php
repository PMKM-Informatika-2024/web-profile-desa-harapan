<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layananpublik extends Model
{
    /** @use HasFactory<\Database\Factories\LayananpublikFactory> */
    use HasFactory;
    protected $fillable = [
        'kategori_fasilitas',
        'nama_fasilitas',
        'gambar_fasilitas',
        'alamat',
        'fasilitas_utama',
        'jam_operasional',
        'kontak',
        'akreditasi',
        'jumlah_tenaga_pengajar',
        'jumlah_murid',
        'visi',
        'misi',
    ];
}
