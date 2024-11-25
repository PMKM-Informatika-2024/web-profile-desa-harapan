<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'jumlah_dusun',
        'jumlah_rw',
        'jumlah_rt',
        'jumlah_penduduk',
        'peta_desa',
        'alamat_kantor_desa',
    ];
}
