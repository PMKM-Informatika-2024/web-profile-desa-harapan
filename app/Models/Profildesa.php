<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profildesa extends Model
{
    /** @use HasFactory<\Database\Factories\ProfildesaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_desa',
        'sejarah_desa',
        'gambar_desa',
        'visi_desa',
        'misi_desa',
        'total_jiwa',
        'total_kk',
        'total_dusun',
        'total_rt',
        'suku_melayu',
        'suku_madura',
        'suku_tionghoa',
        'suku_dayak',
        'suku_jawa',
        'suku_bugis',
        'suku_lainnya',
        'agama_islam',
        'agama_katolik',
        'agama_protestan',
        'agama_buddha',
        'agama_hindu',
        'agama_konghuchu',
        'peta_desa',
        'kantor_desa',
    ];
}
