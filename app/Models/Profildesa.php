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
        'gambar_desa_1',
        'gambar_desa_2',
        'gambar_desa_3',
        'gambar_desa_4',
        'gambar_desa_5',
        'gambar_desa_6',
        'visi_desa',
        'misi_desa',
        'total_jiwa',
        'total_kk',
        'total_dusun',
        'total_rt',
        'suku_melayu',
        'suku_melayusambas',
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
