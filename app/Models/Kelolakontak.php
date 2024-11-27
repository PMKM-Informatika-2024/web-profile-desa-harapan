<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelolakontak extends Model
{
    /** @use HasFactory<\Database\Factories\KelolakontakFactory> */
    use HasFactory;
    protected $fillable = [
        'no_whatsapp',
        'username_instagram',
        'username_facebook',
        'email',
    ];
    
}
