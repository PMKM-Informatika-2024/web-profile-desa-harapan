<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembagadesa extends Model
{
    /** @use HasFactory<\Database\Factories\LembagadesaFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_lembaga',
        'nama_ketua',
        'gambar_lembaga',
    ];
    
}
