<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'bahan',
        'langkah_pembuatan',
        'foto'
    ];
}
